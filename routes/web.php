<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfesiController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[App\Http\Controllers\HomeController::class,'dashboard']);
Route::get('/admin/data',[App\Http\Controllers\HomeController::class,'index'])->name('example.data');
Route::get('/admin/data/add',[App\Http\Controllers\HomeController::class,'create'])->name('example.data.add');
Route::post('/admin/data/insert-data',[App\Http\Controllers\HomeController::class,'store'])->name('example.insert');
Route::get('/admin/data/{id}',[App\Http\Controllers\HomeController::class,'edit'])->name('example.edit');
Route::get('/admin/data/show/{id}',[App\Http\Controllers\HomeController::class,'show'])->name('example.edit');
Route::post('/admin/data/update/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('example.insert');

//user
Route::get('/admin/user',[UserController::class,'index'])->name('user');
Route::post('/admin/user/store',[UserController::class,'store']);
Route::get('/admin/user/show/{id}',[UserController::class,'show']);
Route::get('/admin/user/edit/{id}',[UserController::class,'edit']);
Route::delete('/admin/user/delete/{id}',[UserController::class,'delete']);

//profesi
Route::get('/admin/profesi',[ProfesiController::class,'index'])->name('profesi');
Route::post('/admin/profesi/store',[ProfesiController::class,'store']);
Route::get('/admin/profesi/show/{id}',[ProfesiController::class,'show']);
