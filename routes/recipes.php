<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your the recipes. 
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');

    Route::get('/recipe/new', [RecipeController::class, 'create'])->name(
        'recipe.create',
    );

    Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name(
        'recipe.show',
    );
});

Route::get('/recipe', function () {
    return redirect('/recipes');
});
