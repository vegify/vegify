<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\URL;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard', [
            'users' => User::all()->map(function ($user) {
                return $user->load('recipes');
            }),
        ]);
    }
}
