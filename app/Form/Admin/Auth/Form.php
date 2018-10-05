<?php

namespace App\Form\Admin\Auth;
use App\Form\FormBase;

class Form extends FormBase{
    protected $form = array(
        'route' => 'postLogin',
        'method' => 'post',
        'form_attributes' => array()
    );

    protected $form_items = array(
        'user_name' => array(
            'type'             => 'text',
            'value'            => NULL,
            'input_attributes' => array(
                'id'          => 'inputEmail',
                'class'       => 'form-control',
                'placeholder' => 'Email address',
                'required'    => 'required',
                'autofocus'   => "autofocus"
            )
        ),
        'password' => array(
            'type' => 'password',
            'value' => NULL,
            'input_attributes' => array(
                'id'          => 'inputPassword',
                'class'       => 'form-control',
                'placeholder' => 'Passowrd',
                'required'    => 'required',
            )
        )
    );
}