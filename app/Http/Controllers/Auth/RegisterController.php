<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::USER_PROFILE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }
    public function showRegistrationForm()
    {
        return view('auth.register_card');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dd($data);

        return Validator::make($data, [
            'name' => ['required', 'string'], //, 'max:255'
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], //'unique:users' sẽ kiểm tra email tồn tại hay ko
            'gender'=>['required'],
            'phone'=>['required','string','max:10','unique:user_info'],
            'CCCD'=>['required'],
            'date_of_birth'=>['required','date'],
            'education'=>['required'],
            'employment_status'=>['required'],
            'marriage'=>['required'],
            'emergencyContactNumber1'=>['required'],
            'emergencyContactNumber2'=>['required'],
            'shortDescription'=>['required'],
            'current_city'=>['required'],
            'district'=>['required'],
            'wards'=>['required'],
            'current_address'=>['required', 'string'],
            'company_name'=>['required', 'string'],
            'company_city'=>['required'],
            'company_district'=>['required'],
            'company_wards'=>['required'],
            'company_address'=>['required', 'string'],
            'workingYears'=>['required'],
            'workingMonths'=>['required'],
            'pick_up_address'=>['required'],
            'password' => ['required', 'string', 'min:8',], // 'confirmed'
        ],[

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//        dd('create from register');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
}
