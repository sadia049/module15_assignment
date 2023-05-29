<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

use Illuminate\Http\Request;

class reqValidate extends Controller
{
    function validation(Request $request){

        $request->validate([
          
            'password' => ['required', 'confirmed', Password::min(8)],
            'name'=>['required','string','min:2'],
            'email_address' => 'required|email|unique:customers,email_address'

        ]);

        
    }
}
