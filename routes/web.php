<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LiquidController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AccController;
use App\Http\Controllers\BatreController;
use App\Http\Controllers\CoilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;


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

//---------------routing landing page--------------
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/contact', function () {
    return view('landingpage.contact');
});

Route::get('/login', function () {
    return view('landingpage.login_form');
});


//---------------routing admin page--------------
Route::get('/administrator', function () {
    return view('admin.home');
});

Route::get('/profileuser', function () {
    return view('admin.profileuser');
});

Route::resource('jenis',JenisController::class);
Route::resource('penjual',PenjualController::class);
Route::resource('produk',ProdukController::class);
Route::resource('liquid',LiquidController::class);
Route::resource('device',DeviceController::class);
Route::resource('acc',AccController::class);
Route::resource('batre',BatreController::class);
Route::resource('coil',CoilController::class);

Route::get('produk-edit/{id}', [ProdukController::class,'edit']);
Route::get('produk-pdf', [ProdukController::class,'produkPDF']);
Route::get('produk-excel', [ProdukController::class,'produkExcel']);
Route::get('dashboard', [DashboardController::class,'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kelola_user', function () {
    return view('admin.admin.home');
})->middleware('auth');