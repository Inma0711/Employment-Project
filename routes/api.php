<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\ProgressController;


Route::get('/offers', [OfferController::class, 'index'])->name('apiHome');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apiShowOffer');
Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('apiDestroy');
Route::post('/offers', [OfferController::class, 'store'])->name('apiStore');
Route::put('/offers/{id}', [OfferController::class, 'update'])->name('apiUpdate');

Route::get('/progresses', [ProgressController::class, 'index'])->name('apiHomeProgresses');
Route::get('/progresses/{id}', [ProgressController::class, 'show'])->name('apiShowProgress');
Route::post('/offers/{id}/progresses', [ProgressController::class, 'store'])->name('apiStoreProgress');
Route::put('/progresses/{id}', [ProgressController::class, 'update'])->name('apiUpdateProgress');
Route::delete('/progresses/{id}', [ProgressController::class, 'destroy'])->name('apiDestroyProgress');