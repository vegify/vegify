<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Recipe;
use Illuminate\Http\Request;

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
        'recipes' => Recipe::all(),
    ]);
})->name('home');

Route::get('search/{search}', function (Request $request) {
    return Recipe::search($request->search)->get();
})->name('search');

Route::get('/dashboard', function () {
    return redirect('/');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/recipe', function () {
    return Inertia::render('Recipe');
})
    ->middleware(['auth', 'verified'])
    ->name('recipe');

require __DIR__ . '/ingredients.php';
require __DIR__ . '/recipes.php';
require __DIR__ . '/users.php';
require __DIR__ . '/auth.php';
