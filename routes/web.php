<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/all', [ProductController::class, 'all']);

Route::resource('products', ProductController::class);

Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisteredUserController::class,  'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class,   'store']);

    Route::get('/login', [SessionController::class,  'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');