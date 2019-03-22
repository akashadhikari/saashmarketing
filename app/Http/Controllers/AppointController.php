<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Mail\AppointMail;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class AppointController extends Controller
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

        $clients = \App\Client::get()->pluck('first_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employees = \App\Employee::get()->pluck('first_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('appoint', compact('clients', 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());
        
        $appoint = Client::where('id',"=",$appointment->client_id)->first();
        
        
        Mail::send(new AppointMail($appoint));

        $basic = Plan::where('plan',"=",'Basic')->first();

        $detail = Plan::all();
        
        return redirect('')->with(
            ['basics' => $basic,
            'details' => $detail]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
