<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',function () {
    return redirect()->route('login.form');
})->middleware('guest');

Route::get('/signup',[UserController::class,'showsignup'])->name('signup.form');

Route::post('/signup',[UserController::class,'signup'])->name('signup');


Route::get('/login',function(){
    return Inertia::render('loginform');
})->name('login.form');

Route::post('/login',[UserController::class,'login'])->name('login');


Route::get('/dashboard',[UserController::class,'dashboard'])->middleware('auth')->name('dashboard');



