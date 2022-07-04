<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImgRequest;
use App\Http\Requests\UpdateImgRequest;
use App\Models\Img;

class ImgController extends Controller
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
     * @param  \App\Http\Requests\StoreImgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function show(Img $img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function edit(Img $img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImgRequest  $request
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImgRequest $request, Img $img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function destroy(Img $img)
    {
        //
    }
}
