<?php

namespace App\Http\Controllers;


use App\Mail\MailNotify;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     public function index(){

        $data=[

            'subject'=>'Hello from Laravel Mail',
            'body'=> 'This is very difficult',
        ];



        try{

            Mail::to('sadianawsin018@gmail.com')->send(new MailNotify($data));
            return response()->json('Great');

        }

        catch(Exception $th){

            
            return response()->json($th);
        }



     }
}
