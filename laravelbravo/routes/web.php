<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GreetController;

Route::get('/hello', function() {
    return 'Hello Kitty!';
});

Route::get('/greet', [GreetController::class, 'greetMethod']);

Route::resource('tasks', TasksController::class);