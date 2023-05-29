<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\reqValidate;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SingleAction;
use App\Http\Middleware\AuthMiddleware;
use App\Mail\mailnotifies;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//return 

Route::get('/home',function(){

    return redirect()->route('dashboard',302);

});

Route::get('/dashboard',function(){

   return "Hi from dashboard page";


})->name('dashboard');

//redirect to Logcontroller
Route::get('/log',[LogController::class,'log']);

Route::middleware('AuthMiddleware')->group(function(){
 Route::get('/profile/{name}/{pass}',[LogController::class,'Auth']);
 Route::get('/settings/{name}/{pass}',[LogController::class,'Auth']);
});

// Route::get('/hello',[MailController::class,'index']);
Route::get('/mail',SingleAction::class);

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products/store',[ProductController::class,'store']);
Route::get('/products/{id}/edit',[ProductController::class,'edit']);
Route::put('/products/{id}/update',[ProductController::class,'update']);
Route::get('/products/{id}/delete',[ProductController::class,'destroy']);

Route::get('validate',[reqValidate::class,'validation']);


Route::resource('/post',ResourceController::class);
Route::get('/post/create',[ProductController::class,'create']);
Route::post('/post/store',[ProductController::class,'store']);
Route::get('/products/{id}/delete',[ProductController::class,'destroy']);

