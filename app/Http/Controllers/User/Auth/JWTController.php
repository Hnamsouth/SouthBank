<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTController extends Controller
{
    //

    public function JWTlogin(Request $request)
    {
        try {
            $user = JWTAuth::toUser($request->get('data'));

            return response()->json(['result' => $user]);
        } catch (Throwable $e) {
            return $e;
        }
//        try {
//            $token= $request->get('data');
//            if(!$token){
//                return response()->json(['rs' =>false], 400);
//            }
//            Auth::guard('jwtAuth')->onceUsingId($token);
//
//            if(!Auth::guard('jwtAuth')->check()){
//                return $request;
//
//                return response()->json(['rs' =>false], 400);
//            }
//
//            return response()->json(['rs' =>true]);
//        }catch (Throwable $e){
//            return $e;
//        }
//    }
    }
}
