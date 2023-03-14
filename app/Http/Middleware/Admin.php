<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
//        check nếu  đã đăng nhập

        if(auth()->check() && auth()->user()->isAdministrator()){
//            if(auth()->user()->isAdministrator()){ // check Administrator
//            }
//            auth()->logout();
            return $next($request);
//            return abort(404,'Bạn không thể quy cập trang web này');
        }
        return redirect()->route('admin.login')->with("err","User or password incorrect");
    }
}
