<?php
use Illuminate\Support\Facades\Auth;
use \App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;


    /**
     * @Route. for staff ,manager
     */

Route::match(['get', 'post'], 'login', [LoginController::class, 'login'])->name('admin.login');

    Route::middleware(['admins'])->group(function (){


        Route::get('dashboard',function (){

            $user = Auth::user();
            dd($user);
            return $user;

        })->name('admin.dashboard');
        /**
         * @Route for only admin & manager
         */
        Route::middleware('administrator')->group(function(){
            // CRUD account for administration
            Route::get('acc-administration',function ( ){});
            Route::post('acc-administration',function (){});

            // CRUD fees
            Route::get('fees',function ( ){});
            Route::post('fees',function (){});
        });

    });
//    Auth::routes();
//    Auth::routes(['register' => false]);





