<?php

namespace App\Http\Controllers;

use App\Custom;
use Illuminate\Http\Request;
use App\Plan;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $custom = Plan::all()->first();
            // return ('custom')->with('customs'=> $custom);
            
            $detail = Plan::all();

            return view('custom', ['details' => $detail]);

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
     * @param  \App\Custom  $custom
     * @return \Illuminate\Http\Response
     */
    public function show(Custom $custom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Custom  $custom
     * @return \Illuminate\Http\Response
     */
    public function edit(Custom $custom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Custom  $custom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custom $custom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Custom  $custom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custom $custom)
    {
        //
    }
}
