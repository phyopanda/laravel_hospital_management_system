<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Auth::routes();

Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified');

Route::get('/add_doctor',[AdminController::class,'addview']);

Route::post('/add_doctor',[AdminController::class, 'create']);

Route::post('/add_appointment',[HomeController::class, 'create']);

Route::get('/my_appointment',[HomeController::class, 'appointment']);

Route::get('/cancel_appointment/{id}',[HomeController::class, 'cancel_appointment']);

Route::get('/appointment',[AdminController::class, 'appointment']);

Route::get('/aproved/{id}',[AdminController::class, 'aproved']);

Route::get('/canceled/{id}',[AdminController::class, 'canceled']);

Route::get('/show_doctor',[AdminController::class, 'show_doctor']);

Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class, 'updatedoctor']);

Route::post('/edit_doctor/{id}',[AdminController::class, 'editdoctor']);