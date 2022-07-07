<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IngredientController;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your the ingredients. 
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ingredients', [IngredientController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('ingredients');

Route::get('/ingredient', function () {
    return redirect('/ingredients');
});

Route::get('/ingredient/new', [IngredientController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('ingredient.create');

Route::get('/ingredient/{ingredient}', [IngredientController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('ingredient.show');
