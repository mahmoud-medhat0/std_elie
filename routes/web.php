<?php

use App\Http\Controllers\FormRegister;
use App\Http\Controllers\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'home'=>false
  ]);

Route::middleware(['VerifiedUser', 'auth'])->group(function () {
    Route::controller(student::class)->group(function(){
        Route::get('att','attend')->name('attend');
        Route::get('exm','exm')->name('exm');
        Route::get('exc','exc')->name('exc');
        Route::get('hw','hw')->name('hw');
        Route::get('profile','profile')->name('profile');
    });
    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
});
Route::controller(FormRegister::class)->group(function(){
    Route::get('register','register')->name('register');
});
