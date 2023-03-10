<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showForm(){

    }

    public function login(Request $rq){
        $credentials= $rq->validate([
           'email'=>['required','email'],
            'password'=>['required'],
        ]);
        /**
         * the session()->regenerate() method is called to regenerate the session ID. This is a security measure that helps prevent session fixation attacks.
         */
        if (Auth::attempt($credentials)) {
            $rq->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return redirect()->back()->withErrors(['email'=>'Invalid credentials']);
    }
}
