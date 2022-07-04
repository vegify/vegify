<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmountRequest;
use App\Http\Requests\UpdateAmountRequest;
use App\Models\Amount;

class AmountController extends Controller
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
     * @param  \App\Http\Requests\StoreAmountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAmountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\Response
     */
    public function show(Amount $amount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\Response
     */
    public function edit(Amount $amount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAmountRequest  $request
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAmountRequest $request, Amount $amount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amount $amount)
    {
        //
    }
}
