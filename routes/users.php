<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/{user}/edit', [UserController::class, 'show'])->name(
        'user.edit',
    );
});

Route::get('/user', function () {
    return redirect('/users');
});
