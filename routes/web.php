<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DispenController;
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

// users 
Route::get('/', [UsersController::class, 'index'])->name("dashboardUser");
Route::get('/bukuTamu', [UsersController::class, 'bukuTamu'])->name("bukuTamu");
Route::get('/dispen', [UsersController::class, 'dispen'])->name("dispen");
Route::post('/cetakDispen', [UsersController::class, 'cetakDispen'])->name("cetakDispen");
Route::get('/sarpras', [UsersController::class, 'sarpras'])->name("sarpras");
Route::post('/kirimTamu', [UsersController::class, 'kirimTamu'])->name("kirimTamu");

// auth
Route::get('/authentication', [AuthenticationController::class,'index'])->name("login");
Route::post('/postLogin', [AuthenticationController::class,'postLogin'])->name("postLogin");
Route::get('/logout', [AuthenticationController::class,'logout'])->name("logout");

Route::group(['middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name("dashboard");
    
    // slide
    Route::get('/slide', [SlideController::class,'index'])->name("slide");
    Route::get('/createSlide', [SlideController::class,'create'])->name("createSlide");
    Route::post('/storeSlide', [SlideController::class,'store'])->name("storeSlide");
    Route::get('/showSlide/{id}', [SlideController::class,'show'])->name("showSlide");
    Route::post('/updateSlide', [SlideController::class,'update'])->name("updateSlide");
    Route::get('/destroySlide/{image}', [SlideController::class,'destroy'])->name("destroySlide");

    // sarpras
    Route::get('/sarpras', [SarprasController::class,'index'])->name("sarpras");
    Route::get('/createSarpras', [SarprasController::class,'create'])->name("createSarpras");
    Route::post('/storeSarpras', [SarprasController::class,'store'])->name("storeSarpras");
    Route::get('/showSarpras/{id}', [SarprasController::class,'show'])->name("showSarpras");
    Route::post('/updateSarpras', [SarprasController::class,'update'])->name("updateSarpras");
    Route::get('/destroySarpras/{id}', [SarprasController::class,'destroy'])->name("destroySarpras");

    // tamu
    Route::get('/tamu', [TamuController::class,'index'])->name("tamu");
    Route::get('/tamu/cetakTamu', [TamuController::class,'cetakTamu'])->name('cetakTamu');
    Route::get('/tamu/hapusTamu/{image}', [TamuController::class,'destroy'])->name('hapusTamu');
    Route::get('/tamu/pdfTamuAll', [TamuController::class,"pdfTamuAll"])->name('cetakAllTamu');
    Route::post('/tamu/pdfTamu', [TamuController::class,"pdfTamu"])->name('pdfTamu');

    // dispen
    Route::get('/dispen', [DispenController::class,'index'])->name("dispen");
    Route::get('/dispen/hapusDispen/{image}', [DispenController::class,'destroy'])->name('hapusDispen');

});