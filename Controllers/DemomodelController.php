<?php

namespace App\Http\Controllers;

use App\Models\demomodel;
use App\Http\Requests\StoredemomodelRequest;
use App\Http\Requests\UpdatedemomodelRequest;

class DemomodelController extends Controller
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
     * @param  \App\Http\Requests\StoredemomodelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredemomodelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demomodel  $demomodel
     * @return \Illuminate\Http\Response
     */
    public function show(demomodel $demomodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demomodel  $demomodel
     * @return \Illuminate\Http\Response
     */
    public function edit(demomodel $demomodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedemomodelRequest  $request
     * @param  \App\Models\demomodel  $demomodel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedemomodelRequest $request, demomodel $demomodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demomodel  $demomodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(demomodel $demomodel)
    {
        //
    }
}
