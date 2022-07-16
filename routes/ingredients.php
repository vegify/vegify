<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IngredientController;

Route::get('/ingredients', [IngredientController::class, 'index'])->name(
    'ingredients',
);
Route::get('/ingredient/{ingredient}', [
    IngredientController::class,
    'show',
])->name('ingredient.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/ingredient/new', [
        IngredientController::class,
        'create',
    ])->name('ingredient.create');
});

Route::get('/ingredient', function () {
    return redirect('/ingredients');
});
