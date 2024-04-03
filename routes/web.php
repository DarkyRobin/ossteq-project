<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showForm'])->name('form.show');
Route::post('/submit', [FormController::class, 'storeData'])->name('form.store');
Route::get('/database', [FormController::class, 'viewDatabase'])->name('database.view');
