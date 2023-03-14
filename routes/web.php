<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendSMS;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
//    return view('admin.layout');
    return view('user.home');
})->name('home');


Route::view('/home-admin', 'admin.Home');
Route::view('/layout', 'admin.layout');


Route::middleware(['auth:web'])->prefix('/user')->group(function (){
    Route::get('profile', function () { return view('user_p.layout');}) ->name('user.profile');
    Route::get('checkout', function () { return "check out";});
    Route::get('transaction', function () {});
    Route::get('payment', function () {});

});

Auth::routes();

//  test
Route::get('/send-SMS',[SendSMS::class,'SendMess']);

Route::get('logout/{id}',function ($id){
    $id==1?Auth::guard('admin')->logout():Auth::logout();
    return redirect()->route('home');
});
//Route::get('/user-register', function () {
//   return view('user.register');
//});

