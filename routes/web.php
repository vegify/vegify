<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IngredientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/ingredient', [IngredientController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('ingredient');

Route::get('/ingredient/new', [IngredientController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('ingredient.create');

Route::get('/ingredient/{ingredient}', [IngredientController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('ingredient.show');

Route::get('/ingredient/{ingredient}/edit', [
    IngredientController::class,
    'edit',
])
    ->middleware(['auth', 'verified'])
    ->name('ingredient.edit');

Route::get('/recipe', function () {
    return Inertia::render('Recipe');
})
    ->middleware(['auth', 'verified'])
    ->name('recipe');

require __DIR__ . '/auth.php';
