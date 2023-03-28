<?php

use App\Http\Controllers\Auth\LoginController;
use App\Mail\NewUserCreated;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendSMS;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use \App\Http\Controllers\User\Auth\RegisterController;
use \App\Http\Controllers\User\Account\UserAccountController;
use \App\Http\Controllers\User\Account\UserSavingAccController;


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
//    return view('user.home');
    return view('customer.page.home');
})->name('home');

Route::get('acc-register/{acc_type?}',[RegisterController::class,'showRegistrationForm'])->name('acc.register');
Route::post('acc-register',[RegisterController::class,'register']);

Route::get('account-list',function(){
    $acc=\App\Models\AccountType::all();
    return view('customer.page.account_list',compact('acc'));
})->name('account.list');

Route::middleware(['auth:web'])->prefix('/user')->group(function (){
    Route::get('profile', function () { return view('customer.demo');}) ->name('user.profile');

    Route::prefix('acc')->group(function(){
        Route::get('list',[UserAccountController::class,'showUserAccounts'])->name('user.account.list');
        Route::get('detail/{account}',[UserAccountController::class,'showAccountDetails'])->name('user.account.detail');

        Route::prefix('transfer')->group(function(){
        //  account transfer
            Route::get('within-bank',[UserAccountController::class,'showTransferWithinBank'])->name('user.transfer.within-bank');
            Route::post('within-bank',[UserAccountController::class,'handleTransfer']);
            Route::post('check-amount-transfer',[UserAccountController::class,'CheckAmount_Transfer'])->name('check-amount-transfer');

            Route::get('transfer-end/{transId}',[UserAccountController::class,'showTransferEnd'])->name('user.transfer.end');

            Route::post('search-acc',[UserAccountController::class,'SearchAccount'])->name('search-acc');
            Route::post('generate-pw',[UserAccountController::class,'GTransPW'])->name('g.t.pw');
            Route::post('check-transfer-pw',[UserAccountController::class,'CheckTransPW'])->name('c.t.pw');
        // saving account
            Route::get('saving-list',[UserSavingAccController::class,'showSavingAccList'])->name('user.saving-acc-list');
            Route::get('open-saving/{deposit_type}',[UserSavingAccController::class,'showFormOpenSavingAcc'])->name('user.open-saving');
            Route::post('open-saving',[UserSavingAccController::class,'handleOpenSaving'])->name('user.hd-open-saving');

            Route::post('check-amount-saving',[UserSavingAccController::class,'CheckAmount_Saving'])->name('check-amount-saving');
            Route::post('check-interest-rate',[UserSavingAccController::class,'CheckInterestRate'])->name('check-ir');
        });
    });

});

Route::post('check-register-valid',[RegisterController::class,'checkRegister'])->name('check.register');

Auth::routes();

//  test

Route::get('/send-SMS',[SendSMS::class,'SendMess']);

Route::get('logout/{id}',function ($id){
    $id==1?Auth::guard('admin')->logout():Auth::logout();
    return redirect()->route('home');

    Route::view('/layout', 'customer.layout3');
})->name('user-logout');

Route::view('/home-admin', 'admin.Home');

Route::get('/api-banks', function(){
    $bank=Http::get('https://api.vietqr.io/v2/banks');
    $b1=$bank->json() ;
    dd($b1['data']);
    return $bank;
});

Route::get('upfile',function(){
    dd(Carbon::now()->getTimestamp());
    return view('user.uoload_file_demo');})->name('upfile');
Route::post('upfile',function(Request $request){
    dd(Carbon::now()->micro);
    dd($request->file('image'));}
)->name('upfile');

