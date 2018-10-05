<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public $session, $request;      
    protected $session_key = "";

    public function __construct() {
        //require all constant virable
        require_once(app_path().'/Http/constant.php');
        $this->session = session();
        $this->request = request();
    }
}