<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return 'Hello Kitty!';
});

Route::get('/second',[GreetController::class, 'greet']);