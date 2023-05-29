<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    function log(Request $request){

        //the log info will be saved in storage/logs/Laravel.log

        Log::info($request->method());
        Log::info($request->fullUrl());


       
    }


    function Auth(Request $request){

        return "Hello $request->name";

    }
}
