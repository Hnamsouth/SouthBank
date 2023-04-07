<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::USER_ACCOUNT0_LIST;
    protected $maxAttempts=3;
    protected $MESS_ERR_MAX_ATTEMPTS="Your account is locked.Please go to your email to unlock";
    protected $MESS_ERR_ATTEMPTS="Your account will be locked if you login incorrectly more than 3 times. Press 'Forgot your password' to reset your password";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');

    }
    public function username(){
        return 'username';
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);

//            xu ly khi vuot qua so lan cho phep: update user status and send mail
        if (method_exists($this, 'hasTooManyLoginAttempts')&& $this->hasTooManyLoginAttempts($request)) { //)
                $this->fireLockoutEvent($request);
                User::where('username','=',$request->username)->update(['status'=>0]);
                return $this->sendLockoutResponse($request,$this->MESS_ERR_MAX_ATTEMPTS);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            $user=auth()->user();
            if($user->status===0){
//  log out
                $this->guard()->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
//  send mess
                return $this->sendFailedLoginResponse($request,$this->MESS_ERR_MAX_ATTEMPTS);
            }
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request,$this->MESS_ERR_ATTEMPTS);
    }

    protected function sendLockoutResponse(Request $request,$mess=null)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );
        throw ValidationException::withMessages([
            $this->username() => $mess!=null?$mess:[trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ])],
        ])->status(Response::HTTP_TOO_MANY_REQUESTS);
    }

    protected function sendFailedLoginResponse(Request $request,$mess=null)
    {
        throw ValidationException::withMessages([
            $this->username() => $mess!=null?$mess:[trans('auth.failed')],
        ]);
    }
}
