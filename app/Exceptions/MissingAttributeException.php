<?php

namespace App\Exceptions;

use Exception;

class MissingAttributeException extends Exception
{
    public function render(){
        return view('error.509')->with('message', $this->message);
    }
}
