<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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

//landing
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('root');
Route::get('/home',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/web',[App\Http\Controllers\HomeController::class,'web'])->name('web');
Route::post('/settings',[App\Http\Controllers\HomeController::class,'settings'])->name('settings');
Route::get('/home/about',[App\Http\Controllers\HomeController::class,'about'])->name('home.about');
Route::get('/home/services',[App\Http\Controllers\HomeController::class,'services'])->name('home.services');
Route::get('/home/events',[App\Http\Controllers\HomeController::class,'events'])->name('home.events');
Route::get('/home/foto',[App\Http\Controllers\HomeController::class,'foto'])->name('home.foto');
Route::get('/home/video',[App\Http\Controllers\HomeController::class,'video'])->name('home.video');
Route::get('/home/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('home.contact');

//wilayah indonesia
Route::get('/wilayah',[App\Http\Controllers\HomeController::class,'wilayah'])->name('home.wilayah');
Route::get('/daerah/kabupatenkota/{provinsi}',[App\Http\Controllers\HomeController::class,'kabupatenkota'])->name('home.kabupatenkota');
Route::get('/daerah/kecamatan/{kabupatenkota}',[App\Http\Controllers\HomeController::class,'kecamatan'])->name('home.kecamatan');
Route::get('/daerah/kelurahan/{kecamatan}',[App\Http\Controllers\HomeController::class,'kelurahan'])->name('home.kelurahan');


//ajax wilayah
Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'DependentDropdownController@cities')->name('cities');
Route::get('districts', 'DependentDropdownController@districts')->name('districts');
Route::get('villages', 'DependentDropdownController@villages')->name('villages');

//login
Route::get('/login',[App\Http\Controllers\AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/auth',[App\Http\Controllers\AuthController::class,'login']);
Route::get('/profile',[App\Http\Controllers\AuthController::class,'profile'])->name('profile')->middleware('auth');
Route::get('/registration',[App\Http\Controllers\AuthController::class,'registration'])->name('registration');
Route::post('/register',[App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::post('/logout',[App\Http\Controllers\AuthController::class,'logout'])->name('logout');

//user
Route::get('/admin/user',[UserController::class,'index'])->name('user')->middleware('auth');
Route::post('/admin/user/store',[UserController::class,'store']);
Route::get('/admin/user/show/{id}',[UserController::class,'show'])->name('user.show')->middleware('auth');
Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('user.edit')->middleware('auth');
Route::post('/admin/user/update/{id}',[UserController::class,'update'])->middleware('auth');
Route::delete('/admin/user/delete/{id}',[UserController::class,'delete'])->middleware('auth');

//customer
Route::get('/admin/customer',[App\Http\Controllers\CustomerController::class,'index'])->name('customer')->middleware('auth');
Route::get('/admin/customer/add',[App\Http\Controllers\CustomerController::class,'create'])->name('customer.add')->middleware('auth');
Route::post('/admin/customer/insert-data',[App\Http\Controllers\CustomerController::class,'store'])->name('customer.insert')->middleware('auth');
Route::get('/admin/customer/{id}',[App\Http\Controllers\CustomerController::class,'edit'])->name('customer.edit')->middleware('auth');
Route::get('/admin/customer/show/{id}',[App\Http\Controllers\CustomerController::class,'show'])->name('customer.edit')->middleware('auth');
Route::post('/admin/customer/update/{id}',[App\Http\Controllers\CustomerController::class,'update'])->name('customer.update')->middleware('auth');
Route::post('/admin/customer/delete/{id}',[App\Http\Controllers\CustomerController::class,'destroy'])->name('customer.destroy')->middleware('auth');


//profesi
Route::get('/admin/profesi',[ProfesiController::class,'index'])->name('profesi')->middleware('auth');
Route::get('/admin/profesi/pdf',[ProfesiController::class,'pdf'])->name('profesi.pdf')->middleware('auth');
Route::post('/admin/profesi/store',[ProfesiController::class,'store'])->middleware('auth');
Route::get('/admin/profesi/show/{id}',[ProfesiController::class,'show'])->middleware('auth');

//OP
Route::get('/admin/op',[OrganisasiProfesiController::class,'index'])->name('op')->middleware('auth');
Route::get('/admin/op/read',[OrganisasiProfesiController::class,'read'])->name('op.read')->middleware('auth');
Route::get('/admin/op/create',[OrganisasiProfesiController::class,'create'])->middleware('auth');
Route::get('/admin/op/store',[OrganisasiProfesiController::class,'store'])->middleware('auth');
Route::get('/admin/op/show/{id}',[OrganisasiProfesiController::class,'show'])->middleware('auth');
Route::get('/admin/op/update/{id}',[OrganisasiProfesiController::class,'update'])->middleware('auth');

//organisasi
Route::get('/admin/organisasi',[OrganisasiController::class,'index'])->name('organisasi')->middleware('auth');
Route::get('/admin/organisasi/show/{id}',[OrganisasiController::class,'show'])->name('organisasi.show')->middleware('auth');
Route::post('/admin/organisasi/store',[OrganisasiController::class,'store'])->middleware('auth');
Route::get('/qrcode/{id}', [OrganisasiController::class, 'edit'])->name('generate')->middleware('auth');

//website
Route::get('/admin/website',[WebController::class,'admin'])->name('web_admin')->middleware('auth');

