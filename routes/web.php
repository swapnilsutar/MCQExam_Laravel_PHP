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
    return view('newquestion');
});
// Route::view('newquestion','newquestion');

Route::post('insertquestion',[HomeController::class,'store']);

Route::get('/',[HomeController::class,'display'])->name('welcome');

Route::post('/submitanswer',[HomeController::class,'result']);