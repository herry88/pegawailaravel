<?php

namespace App\Http\Controllers;

use App\Models\Invetaris;
use Illuminate\Http\Request;

class InvetarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventaris.index');
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
     * @param  \App\Models\Invetaris  $invetaris
     * @return \Illuminate\Http\Response
     */
    public function show(Invetaris $invetaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invetaris  $invetaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Invetaris $invetaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invetaris  $invetaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invetaris $invetaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invetaris  $invetaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invetaris $invetaris)
    {
        //
    }
}
