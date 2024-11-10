<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('frontend.home');
Route::get('/literasi', [FrontController::class, 'literasi'])->name('frontend.literasi');
Route::get('/details/{literasi:slug}', [FrontController::class, 'details_literasi'])->name('frontend.detail.literasi');
Route::get('/karya', [FrontController::class, 'karya'])->name('frontend.karya');
Route::get('/about', [FrontController::class, 'about'])->name('frontend.about');
Route::get('/topik', [FrontController::class, 'topik'])->name('frontend.categories');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('frontend.kontak');