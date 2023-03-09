<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGetRequest;
use App\Http\Requests\UpdateGetRequest;
use App\Models\Get;

class GetController extends Controller
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
     * @param  \App\Http\Requests\StoreGetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function show(Get $get)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function edit(Get $get)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGetRequest  $request
     * @param  \App\Models\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGetRequest $request, Get $get)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function destroy(Get $get)
    {
        //
    }
}
