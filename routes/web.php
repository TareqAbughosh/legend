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
})->name("home");

Route::prefix('/commodity-trading')->group(function () {
    Route::get('/oil-and-gas', function () {
        return view('oil');
    })->name('oil');
    Route::get('/renewable-energy-trading', function () {
        return view('renewableTrading');
    })->name('renewableTrading');
    Route::get('/metal-trading', function () {
        return view('metalTrading');
    })->name('metalTrading');
});

Route::get('/renewable-energy-development', function () {
    return view('renewableDevelopment');
})->name('renewableDevelopment');

Route::get('/contact-us', function(){
    return "lol";
})->name('contact');
