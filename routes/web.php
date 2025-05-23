<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes(['register' => false]);
//Auth::routes(['welcome' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
