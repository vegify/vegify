<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Models\Ingredient;
use Inertia\Inertia;
use Illuminate\Support\Facades\URL;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Ingredient', [
            'ingredients' => Ingredient::all()->map(function ($ingredient) {
                return [
                    'id' => $ingredient->id,
                    'name' => $ingredient->name,
                    'description' => $ingredient->description,
                    'is_vegan' => $ingredient->is_vegan,
                    'serving_size' => $ingredient->serving_size,
                    'batch_size' => $ingredient->batch_size,
                    'show_url' => URL::route('ingredient.show', $ingredient),
                    'edit_url' => URL::route('ingredient.edit', $ingredient),
                ];
            }),
            'create_url' => URL::route('ingredient.create'),
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
     * @param  \App\Http\Requests\StoreIngredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return inertia('Ingredient', [
            'ingredient' => $ingredient->only(
                'id',
                'name',
                'description',
                'is_vegan',
                'serving_size',
                'batch_size',
            ),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredientRequest  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateIngredientRequest $request,
        Ingredient $ingredient,
    ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
