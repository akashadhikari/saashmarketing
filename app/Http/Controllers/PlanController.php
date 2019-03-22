<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;


class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

      public function index()
    {
        
        $basic = Plan::where('plan',"=",'basic')->first();

        $detail = Plan::all();
        
        return view('welcome')->with(
            ['basics' => $basic,
            'details' => $detail]);
    }

     */
    public function index(Request $request)
    {
        
        $basics = Plan::where('plan',"=",'basic')->get();
        
        $price = 0;
        foreach ($basics as $key => $value) {
            
            $price  += $value->price;
        }

        Mail::to($request->email)->send(new EnquiryMail($price,$basics));
        $email = $request->email;
        $basic = Plan::where('plan',"=",'Basic')->get();

        $standard = Plan::where('plan',"=",'Standard')->get();

        $premium = Plan::where('plan',"=",'Premium')->get();

        
        
        return view('enquiry')->with(
            ['basics' => $basic,
            'standards' => $standard,
            'premiums' => $premium,
            'email' => $email]);
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
        $basic = Plan::where('plan',"=",'basic')->get();
        $price = 0;
        foreach ($basic as $key => $value) {
            
            $price  += $value->price;
        }
        Mail::send(new EnquiryMail($price));
        
        return view('enquiry');
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
