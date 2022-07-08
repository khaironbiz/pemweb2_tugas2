<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\OrganisasiProfesiController;

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

Route::get('/',[App\Http\Controllers\HomeController::class,'dashboard']);
Route::get('/admin',[App\Http\Controllers\HomeController::class,'dashboard']);
Route::get('/admin/data',[App\Http\Controllers\HomeController::class,'index'])->name('example.data');
Route::get('/admin/data/add',[App\Http\Controllers\HomeController::class,'create'])->name('example.data.add');
Route::post('/admin/data/insert-data',[App\Http\Controllers\HomeController::class,'store'])->name('example.insert');
Route::get('/admin/data/{id}',[App\Http\Controllers\HomeController::class,'edit'])->name('example.edit');
Route::get('/admin/data/show/{id}',[App\Http\Controllers\HomeController::class,'show'])->name('example.edit');
Route::post('/admin/data/update/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('example.update');
Route::post('/admin/data/delete/{id}',[App\Http\Controllers\HomeController::class,'destroy'])->name('example.destroy');

//user
Route::get('/admin/user',[UserController::class,'index'])->name('user');
Route::post('/admin/user/store',[UserController::class,'store']);
Route::get('/admin/user/show/{id}',[UserController::class,'show'])->name('user.show');
Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[UserController::class,'update']);
Route::delete('/admin/user/delete/{id}',[UserController::class,'delete']);

//profesi
Route::get('/admin/profesi',[ProfesiController::class,'index'])->name('profesi');
Route::get('/admin/profesi/pdf',[ProfesiController::class,'pdf'])->name('profesi.pdf');
Route::post('/admin/profesi/store',[ProfesiController::class,'store']);
Route::get('/admin/profesi/show/{id}',[ProfesiController::class,'show']);

//OP
Route::get('/admin/op',[OrganisasiProfesiController::class,'index'])->name('op');
Route::get('/admin/op/read',[OrganisasiProfesiController::class,'read'])->name('op.read');
Route::get('/admin/op/create',[OrganisasiProfesiController::class,'create']);
Route::get('/admin/op/store',[OrganisasiProfesiController::class,'store']);
Route::get('/admin/op/show/{id}',[OrganisasiProfesiController::class,'show']);
Route::get('/admin/op/update/{id}',[OrganisasiProfesiController::class,'update']);

//organisasi
Route::get('/admin/organisasi',[OrganisasiController::class,'index'])->name('organisasi');
Route::get('/admin/organisasi/show/{id}',[OrganisasiController::class,'show'])->name('organisasi.show');
Route::post('/admin/organisasi/store',[OrganisasiController::class,'store']);
Route::get('/qrcode/{id}', [OrganisasiController::class, 'edit'])->name('generate');
