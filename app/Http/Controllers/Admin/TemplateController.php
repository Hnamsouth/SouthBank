<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{


    protected $tem='admin.template.';
    //

    public function home(){
        notify('my-channel','my-event',["mess"=>"hello"]);
        return view('admin.Home');
    }
    public function layout(){return view('admin.layout');}
    public function pusher(Request $request){
//       return $request->get('data')['name'];
       return redirect()->route('template.home');
    }
    public function get_pusher(Request $request){
    // auth and redirect
//        tìm user bằng id or token từ request . nếu đúng thì xac thực và chuyền hướng tới profile của user
//        nếu sau thì quay lại login và gửi kèm thông báo lỗi
       return redirect('template/home');
    }

//
    public function Show_contact(){return view($this->tem.'contacts');}
    public function Show_invoice(){ return view($this->tem.'invoice'); }
    public function table_footable(){  return view($this->tem.'table_footable'); }
    public function table_basic(){ return view($this->tem.'datatable.basic');}
    public function table_api(){return view($this->tem.'datatable.api');}
    public function table_advanced(){return view($this->tem.'datatable.advanced');}
//    auth
    public function Show_login(){return view($this->tem.'auth.login');}
    public function Show_register(){return view($this->tem.'auth.register');}
    public function Show_lookscreen(){return view($this->tem.'auth.lookscreen');}
    public function Show_recover_pw(){return view($this->tem.'auth.recover_pw');}
//    components
    public function Show_alert(){return view($this->tem.'components.sweet_alert');}
}
