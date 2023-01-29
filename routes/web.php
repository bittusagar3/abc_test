<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('registration', [TestController::class, 'reg'])->name('reg');
Route::get('dashboard', [TestController::class, 'dashboard'])->name('dashboard');

Route::post('registration', [TestController::class, 'create'])->name('create');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
