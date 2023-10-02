<?php

namespace App\Http\Controllers\frontend;

use App\Models\FlexPools;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlexPoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.flexpools');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\Response
     */
    public function show(FlexPools $flexPools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\Response
     */
    public function edit(FlexPools $flexPools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlexPools $flexPools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlexPools $flexPools)
    {
        //
    }
}
