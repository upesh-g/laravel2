<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kapada;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[kapada::class,'index'] );


Route::get('/signup',[kapada::class,'account'] );