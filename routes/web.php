<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendSMS;
use App\Models\User;
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
//    $qr = QrCode::generate('Hello, world!');
    $token = bcrypt('hello, world!'); // generate a unique token
    $qr =QrCode::size(250)->generate($token); // generate QR code with the token

    return view('user.home',compact('qr'));
//    return view('admin.layout');
})->name('home');

//Route::get('/user-register', function () {
//   return view('user.register');
//});
Route::view('/home-admin', 'admin.Home');


Route::middleware(['auth'])->prefix('/user')->group(function (){

    Route::get('profile', function () { return 'user';}) ->name('user.profile');
    Route::get('checkout', function () {});
    Route::get('transaction', function () {});
    Route::get('payment', function () {});
    Route::get('payment', function () {});

});
//Auth::routes();

Route::get('/send-SMS',[SendSMS::class,'SendMess']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('logout/{id}',function ($id){
    $id==1?Auth::guard('admin')->logout():Auth::logout();
    return redirect()->route('home');
});
