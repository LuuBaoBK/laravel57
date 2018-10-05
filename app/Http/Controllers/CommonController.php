<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\FormBuilderService;
use App\Exceptions\MissingAttributeException;

abstract class CommonController extends Controller
{
    protected $feature_name  = null;
    
    protected $session_key = "";
    protected $form;

    public $session, $request;
    
    /**
     * Should setup all required class atributes. That is :
     * $feature_name refer to constant.php
     *
     * @return void
     * @author: bao.luu@tctav.com
     * @since: 
     */
    abstract protected function init();

    public function __construct() {
        $this->session = session();
        $this->request = request();
        $this->init();
        $this->isClassInitRight();
        $this->form = app()->make('App\Form\\'.$this->feature_name.'\\Form');
    }


    final private function isClassInitRight(){
        if(empty($this->feature_name)) {
            $messages = sprintf(trans('error_messages.MissingAttributeException'), get_class($this), "\"feature_name\"");
            throw new MissingAttributeException($messages, 500);
        }
    }
}