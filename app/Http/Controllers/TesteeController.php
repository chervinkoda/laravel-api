<?php

namespace App\Http\Controllers;

use App\Models\Testee;
use App\Http\Requests\StoreTesteeRequest;
use App\Http\Requests\UpdateTesteeRequest;

class TesteeController extends Controller
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
     * @param  \App\Http\Requests\StoreTesteeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTesteeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testee  $testee
     * @return \Illuminate\Http\Response
     */
    public function show(Testee $testee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testee  $testee
     * @return \Illuminate\Http\Response
     */
    public function edit(Testee $testee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTesteeRequest  $request
     * @param  \App\Models\Testee  $testee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTesteeRequest $request, Testee $testee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testee  $testee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testee $testee)
    {
        //
    }
}
