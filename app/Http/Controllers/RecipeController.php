<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use Inertia\Inertia;
use Illuminate\Support\Facades\URL;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Recipe/Index', [
            'recipes' => Recipe::all()->map(function ($recipe) {
                $as_ingredient = $recipe->as_ingredient()->first();
                return [
                    'id' => $recipe->id,
                    'as_ingredient_id' => $recipe->as_ingredient_id,
                    'name' => $as_ingredient->name,
                    'description' => $as_ingredient->description,
                    'is_vegan' => $as_ingredient->is_vegan,
                    'serving_size' => $as_ingredient->serving_size()->first(),
                    'batch_size' => $as_ingredient->batch_size()->first(),
                    'creator' => $recipe->creator()->first(),
                    'subtitle' => $recipe->subtitle,
                    'prep_minutes' => $recipe->prep_minutes,
                    'cook_minutes' => $recipe->cook_minutes,
                    'total_time' => $recipe->total_time,
                    'video_id' => $recipe->video_id,
                ];
            }),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $as_ingredient = $recipe->as_ingredient()->first();

        return inertia('Recipe/Show', [
            'recipe' => [
                'id' => $recipe->id,
                'as_ingredient_id' => $recipe->as_ingredient_id,
                'name' => $as_ingredient->name,
                'description' => $as_ingredient->description,
                'is_vegan' => $as_ingredient->is_vegan,
                'serving_size' => $as_ingredient->serving_size()->first(),
                'batch_size' => $as_ingredient->batch_size()->first(),
                'creator' => $recipe->creator()->first(),
                'subtitle' => $recipe->subtitle,
                'prep_minutes' => $recipe->prep_minutes,
                'cook_minutes' => $recipe->cook_minutes,
                'total_time' => $recipe->total_time,
                'video_id' => $recipe->video_id,
            ],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeRequest  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
