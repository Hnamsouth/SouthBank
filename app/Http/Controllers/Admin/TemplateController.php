<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TemplateController extends Controller
{


    protected $tem='admin.template.';
    //

    public function home(){
        return view('admin.home');
    }
//
    public function Show_contact(){
        return view($this->tem.'contacts');
    }
    public function Show_invoice(){
        return view($this->tem.'invoice');
    }
    public function table_footable(){
        return view($this->tem.'table_footable');
    }
    public function table_basic(){
        return view($this->tem.'datatable.basic');
    }
    public function table_api(){
        return view($this->tem.'datatable.api');
    }
    public function table_advanced(){
        return view($this->tem.'datatable.advanced');
    }
//    auth
    public function Show_login(){
        return view($this->tem.'auth.login');
    }
    public function Show_register(){
        return view($this->tem.'auth.register');
    }
    public function Show_lookscreen(){
        return view($this->tem.'auth.lookscreen');
    }
    public function Show_recover_pw(){
        return view($this->tem.'auth.recover_pw');
    }
//    components
    public function Show_alert(){
        return view($this->tem.'components.sweet_alert');
    }
}
