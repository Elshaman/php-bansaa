<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Raps;
use App\Http\Requests\StoreRapsRequest;
use App\Http\Requests\UpdateRapsRequest;

class RapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRapsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($competencia)
    {
        return Competencia::find($competencia)->raps->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raps $raps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRapsRequest $request, Raps $raps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raps $raps)
    {
        //
    }
}
