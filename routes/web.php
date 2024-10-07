<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('shows', [PagesController::class, 'shows'])->name('shows');
Route::get('galleries', [PagesController::class, 'galleries'])->name('galleries');
Route::get('gallery/{gallery}', [PagesController::class, 'gallery'])->name('gallery');
