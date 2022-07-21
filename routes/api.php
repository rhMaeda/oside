<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('email', function(){

    $details['email'] = 'rafael.hideyuki@gmail.com';
    
    dispatch(new App\Jobs\SendEmailJob($details));

    });

Route::post('email', function(Request $request){
    $details['email'] = $request->email;
    $details['subject'] = $request->subject;
    $details['message'] = $request->message;
    dispatch(new App\Jobs\SendEmailJob($details));
    return response()->json(['success'=>'Email enviado com sucesso!']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
