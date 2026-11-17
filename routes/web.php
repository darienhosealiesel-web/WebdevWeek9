<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaptopController::class, 'index']);
Route::get('/create-laptop', [LaptopController::class, 'create']);
Route::get('/edit-laptop/{laptop}', [LaptopController::class, 'edit'])->name('edit-laptop');
Route::post('/save-laptop', [LaptopController::class, 'store'])->name('save-laptop');
Route::put('/update-laptop/{laptop}', [LaptopController::class, 'update'])->name('update-laptop');
Route::post('/delete-laptop/{laptop}', [LaptopController::class, 'destroy'])->name('delete-laptop');