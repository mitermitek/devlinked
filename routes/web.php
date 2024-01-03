<?php

use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\WelcomeController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
});

Route::prefix('auth')->group(function () {
    Route::prefix('sign-in')->group(function () {
        Route::get('', [SignInController::class, 'index'])->name('auth.sign-in.index');
        Route::post('', [SignInController::class, 'store'])->name('auth.sign-in.store');
    });

    Route::prefix('sign-up')->group(function () {
        Route::get('', [SignUpController::class, 'index'])->name('auth.sign-up.index');
        Route::post('', [SignUpController::class, 'store'])->name('auth.sign-up.store');
    });
});
