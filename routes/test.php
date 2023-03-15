<?php

use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\OpenAIapiController;
use Illuminate\Support\Facades\Route;


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

Route::prefix('template')->group(function(){
    Route::get('home',[TemplateController::class,'home'])->name('template.home');
    Route::get('layout',[TemplateController::class,'home'])->name('template.home');
    //    pusher test
    Route::post('pusher',[TemplateController::class,'pusher']);
    Route::get('getPusher/{token}',[TemplateController::class,'get_pusher'])->name('get_pusher');


    Route::get('table-footable',[TemplateController::class,'table_footable'])->name('template.table_footable');
    Route::get('table-basic',[TemplateController::class,'table_basic'])->name('template.table_basic');
    Route::get('table-api',[TemplateController::class,'table_api'])->name('template.table_api');
    Route::get('table-advanced',[TemplateController::class,'table_advanced'])->name('template.table_advanced');
    Route::get('login',[TemplateController::class,'Show_login'])->name('template.login');
    Route::get('register',[TemplateController::class,'Show_register'])->name('template.register');
    Route::get('lookscreen',[TemplateController::class,'Show_lookscreen'])->name('template.lookscreen');
    Route::get('recover-pw',[TemplateController::class,'Show_recover_pw'])->name('template.recover_pw');
    Route::get('alert',[TemplateController::class,'Show_alert'])->name('template.alert');
    Route::get('contact',[TemplateController::class,'Show_contact'])->name('template.contact');
    Route::get('invoice',[TemplateController::class,'Show_invoice'])->name('template.invoice');



});


//Route::prefix('test')->group(function (){
//    Route::get('/', function () {
//        $options = array(
//            'cluster' => 'ap1',
//            'useTLS' => true
//        );
//        $pusher = new Pusher\Pusher(
//            '51888413ab4a72193de8',
//            '93665272934ae46f40c4',
//            '1562982',
//            $options
//        );
//        $data['message'] = 'hello world';
//        $pusher->trigger('my-channel', 'my-event', $data);
//        return view('user.houser@gmail.come');
//    })->name('home');



//    Route::prefix('/api')->group(function(){
//        Route::get('/',function (){
//            return view('OpenAi.form');
//        })->name('api.form');
//
//        Route::prefix('/handle')->group(function(){
//            Route::post('/completions',[OpenAIapiController::class,'handle_Completions']);
//            Route::post('/edits',[OpenAIapiController::class,'handle_Edits']);
//            Route::get('/demo',function (){
//                return view('OpenAi.form');
//            });
//        });
//    });
//    Route::middleware(['auth'])->prefix(env('ADMIN_PATH'))->group(function (){
//        Route::get('/dashboard',[CategoryController::class,'dashboard'])->name('dashboard');
//        Route::get('/home',function(){
//            return view('admin.Home');
////        return view('auth.verify_email');
//        });
//
//        Route::post('verify-account',[LoginController::class,'handleLogin'])->name('handle-login');
//
//        Route::get('create-product',[CategoryController::class,'createProduct'])->name('product-create');
//
//        Route::get('edit2-product/{product?}',[CategoryController::class,'editProduct'])->name('product-edit2');
//        Route::put('edit2-product/{product?}',[CategoryController::class,'UpdateProduct']);
//
//        Route::put('delete-product',[CategoryController::class,'DeleteProduct'])->name('product-delete');
//
//
//        Route::get('list-product/{id?}',[CategoryController::class,'getProducts2'])->name('products-list');
////    Route::get('list-product/{id}',[CategoryController::class,'getOneProducts']);
//        Route::delete('delete-products/{id?}',[CategoryController::class,'deleteProducts']);
//
//        Route::get('list-category',[CategoryController::class,'getCategory'])->name('category-list');
//        Route::post('create-category',[CategoryController::class,'addCategory']);
//
//        Route::get('student',[DemoController::class,'getStudent'])->name('student-list');
//        Route::post('student-add',[DemoController::class,'AddStudent']);
//        Route::get('/student-delete/{id}',[DemoController::class,'DeleteStudent']);
//
//    });
//    Route::get('/verify-email/{token}', function ($token) {
//        $user = User::where('verification_token', $token)->first();
//
//        if ($user) {
//            $user->verified = true;
//            $user->verification_token = null;
//            $user->save();
//
//            return view('admin.Home');
//        } else {
//            abort(404);
//        }
//    })->name('verify');
//
//    Route::get('/send-email',[DemoController::class,'sendEmailForm'])->name('send_email_demo');
//    Route::post('/send-email',[DemoController::class,'handleSendEmail']);
//    Route::get('/send-SMS',[SendSMS::class,'SendMess']);
//    Route::post('create-product',[CategoryController::class,'addProduct']);
//
//    Route::post('/add-product',[CategoryController::class,'demoAddProduct']);
//
//    Route::get('edit-product/{id?}',[CategoryController::class,'editProduct'])->name('product-edit');
//    Route::post('edit-product',[CategoryController::class,'handleEditProduct']);
//
//});




