<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScrapingController;

Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/scraping', [ScrapingController::class, 'scraping'])->name('scraping');