<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\CommonController;

class AuthController extends CommonController
{
    protected function init(){
        $this->feature_name = FEATURE_ADMIN_AUTH;
    }
    
    public function index(){
        return view('admin.auth.login');
    }

    public function login(){
        
    }
}
