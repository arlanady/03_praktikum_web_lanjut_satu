<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
Use Illuminate\Support\Facades\Views;


Route::get('/home', [HomeController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductsController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolakkidssongs']);
});

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{string}', [NewsController::class, 'newsString']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganindustri']);
});

Route::get('/about-us', [AboutUsController::class, 'aboutus']);

Route::get('/contact-us', [ContactUsController::class, 'contactus']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
