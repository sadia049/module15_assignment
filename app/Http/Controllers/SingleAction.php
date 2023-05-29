<?php

namespace App\Http\Controllers;

use App\Mail\mailnotifies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SingleAction extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)

    {
        $data=$request->input('body');
         Mail::to("sadianawsin018@gmail.com")->send(new mailnotifies($data));
        return new mailnotifies($data);

    }
}
