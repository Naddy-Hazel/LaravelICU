<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

//Route Feeds
Route::get('/feeds', action: [FeedController::class,'index'])->name('feeds');

//Route Feed Create 
Route::post('/feed/create', action: [FeedController::class,'create'])->name('feed.create');

//Route Feed Update 
Route::put('/feed/upadte/{feed}', action: [FeedController::class,'update'])->name('feed.update');

//Route Feed Show
Route::get('/feed/show/{feed}', action: [FeedController::class,'show'])->name('feed.show');
