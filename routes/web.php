<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home{name}', function ($name) {
    return view('home', ['name'=> $name]);
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/auth/signin', function () {
    return view('auth.signin');
});



//Name Route
Route::get('/user/profile', function () {
    return 'Pengguna Profile';
} ) ->name('user.profile');
//Route Param
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
} );


//alias of a route user.profile = /pengguna/profile

//redirect route to name route
Route::get('/redirect-to-profile', function () {
    return 'Pengguna Profiles';
} ) ->name('user.profile');

//route group - without repeat the type of food
Route::prefix('food')->group(function () {
    Route::get('/details',function () {
        return 'Food details are following';
    });
    Route::get('/home',function () {
        return 'Food home page';
    });
} );

//Combination of all
Route::name('job')->prefix('job')->group (function(){
    Route::get('home',function () {
        return 'Job Home Page';
    })->name('.home');

    Route::get('/details',function () {
        return 'Job details are following';
    })->name('.description');
});