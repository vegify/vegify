<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your the users.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::get('/user/{user}', [UserController::class, 'show'])->name(
        'user.show',
    );
});

Route::get('/user', function () {
    return redirect('/users');
});
