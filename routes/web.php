<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [OfferController::class, 'index'])->name('home');

/*
Route::get('/', function () {
    return view('welcome');
});
*/