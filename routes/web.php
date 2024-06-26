<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/blog',[AdminController::class,'index'] )->name('blog');

Route::get('/about',[AdminController::class,'about'] )->name('about');
Route::get('/create',[AdminController::class,'create']);