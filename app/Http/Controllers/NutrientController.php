<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNutrientRequest;
use App\Http\Requests\UpdateNutrientRequest;
use App\Models\Nutrient;

class NutrientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreNutrientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNutrientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nutrient  $nutrient
     * @return \Illuminate\Http\Response
     */
    public function show(Nutrient $nutrient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nutrient  $nutrient
     * @return \Illuminate\Http\Response
     */
    public function edit(Nutrient $nutrient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNutrientRequest  $request
     * @param  \App\Models\Nutrient  $nutrient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNutrientRequest $request, Nutrient $nutrient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nutrient  $nutrient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nutrient $nutrient)
    {
        //
    }
}
