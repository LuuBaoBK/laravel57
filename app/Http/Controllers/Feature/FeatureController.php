<?php

namespace App\Http\Controllers\Feature;

use App\Http\Controllers\CommonController;

class FeatureController extends CommonController {

    public function index(){
        return view('admin.authentication.login');
    }
}