<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/login','login');

Route::post('/answer',function(){
    return view('answer');
});

Route::get('/newquestion', function () {
    if(!session()->has('name')){
        return view('login');
    }
    else{
        return view('newquestion');
    }
});
// Route::view('newquestion','newquestion');

Route::post('insertquestion',[HomeController::class,'store']);

// Route::get('/',[HomeController::class,'display'])->name('welcome');

Route::get('/test',[HomeController::class,'display'])->name('test');

Route::post('/submitanswer',[HomeController::class,'result']);

Route::post('/checklogin',[HomeController::Class,'login']);

Route::get('logout',function(){
    session()->forget('name');
    return redirect('login');
});

Route::view('/score','score')->name('score');