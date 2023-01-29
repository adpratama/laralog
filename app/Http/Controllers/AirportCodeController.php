<?php

namespace App\Http\Controllers;

use App\Models\AirportCode;
use Illuminate\Http\Request;

class AirportCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('dashboard.pages.airport_code.index',[
            'type_menu' => 'data_master'
        ]);
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
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function show(AirportCode $airportCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function edit(AirportCode $airportCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AirportCode $airportCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirportCode $airportCode)
    {
        //
    }
}
