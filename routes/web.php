<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store'])->name('contacto');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::resource('projects', PortfolioController::class);