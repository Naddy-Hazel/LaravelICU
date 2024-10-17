<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

//Route Feeds
Route::get('/feeds', action: [FeedController::class,'index'])->name('feeds');

//Route Feed Create 
Route::get('/feed/create', action: [FeedController::class,'create'])->name('feed.create');
Route::post('/feed/store', action: [FeedController::class,'store'])->name('feed.store');

//Route Feed Update 
Route::get('/feed/show/{feed}', action: [FeedController::class,'show'])->name('feed.show');
Route::put('/feed/upadte/{feed}', action: [FeedController::class,'update'])->name('feed.update');

//Route Feed Show
Route::get('/feed/show/{feed}', action: [FeedController::class,'show'])->name('feed.show');


