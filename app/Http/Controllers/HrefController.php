<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHrefRequest;
use App\Http\Requests\UpdateHrefRequest;
use App\Models\Href;

class HrefController extends Controller
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
     * @param  \App\Http\Requests\StoreHrefRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHrefRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Href  $href
     * @return \Illuminate\Http\Response
     */
    public function show(Href $href)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Href  $href
     * @return \Illuminate\Http\Response
     */
    public function edit(Href $href)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHrefRequest  $request
     * @param  \App\Models\Href  $href
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHrefRequest $request, Href $href)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Href  $href
     * @return \Illuminate\Http\Response
     */
    public function destroy(Href $href)
    {
        //
    }
}
