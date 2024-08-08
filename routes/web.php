<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/',[userController::class,'index'])->name('home');
Route::get('/register',[userController::class,'register'])->name('register');
Route::get('/login',[userController::class,'login'])->name('login');
Route::get('/dashboard',[userController::class,'dashboard'])->name('dashboardPage');

Route::post('/registerUser',[userController::class,'registerUser'])->name('registerUserData');
Route::post('/loginUser',[userController::class,'loginUser'])->name('loginUserData');
Route::get('/logout',[userController::class,'logout'])->name('logout');
Route::get('/dashboard/profile',[userController::class,'profile'])->name('profile');

