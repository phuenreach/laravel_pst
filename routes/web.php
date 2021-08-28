<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'dologout'])->name('logout');

Route::get('/index',[UserController::class,'index']);
Route::get('/createuser',[UserController::class,'create'])->name('createuser');
Route::post('/adduser',[UserController::class,'store'])->name('adduser');
Route::get('/listuser',[UserController::class,'index'])->name('listuser');
Route::get('/edituser/{id}',[UserController::class,'edit'])->name('edituser');
Route::post('/updateuser/{id}',[UserController::class,'update'])->name('updateuser');
Route::get('/deleteuser/{id}',[UserController::class,'destroy'])->name('deleteuser');

// register 
Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::post('/add',[RegisterController::class,'store'])->name('add');