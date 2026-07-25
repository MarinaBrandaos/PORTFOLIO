<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [userController::class, 'index'])
->name("index");

Route::get('/about', [userController::class, 'about'])
->name("about");


Route::get('/admin', [AdminController::class, 'index'])
->name("admin");

Route::post('/admin', [AdminController::class, 'login'])
->name("login");

Route::middleware('admin')->group(function (){
    
    Route::get('/dashboard', [AdminController::class, 'create'])
    ->name("dashboard");
    
    Route::post('/create/post', [AdminController::class, 'store'])
    ->name("post.store");

    Route::get('/update/post/{post}', [AdminController::class, 'edit'])
    ->name("post.form");

    Route::put('/update/post/{post}', [AdminController::class, 'update'])
    ->name("post.update");

    Route::delete('/delete/post/{post}', [AdminController::class, 'destroy'])
    ->name("post.destroy");
});

    
    
