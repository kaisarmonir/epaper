<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\im;
use App\Http\Controllers\epaperC;
use App\Http\Controllers\siteC;
use App\Http\Controllers\up;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [epaperC::class, 'index']);
Route::get('/pdf-upload', [epaperC::class, 'pdf_upload']);
Route::post('/pdf-upload', [epaperC::class, 'pdf_save']);
Route::get('/pdf-show', [epaperC::class, 'pdf_show']);
Route::get('/pdf/{id}', [epaperC::class, 'pdf_download']);


Route::post('/delete/{site}', [up::class, 'delete']);
Route::resource('page', siteC::class);
Route::resource('epaper', epaperC::class);
Route::get('/im', [im::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
