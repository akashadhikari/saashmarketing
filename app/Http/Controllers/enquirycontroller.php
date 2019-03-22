<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enquirycontroller extends Controller
{
     public function index()
    {
        
    	$basic = Plan::where('plan',"=",'basic')->first();

    	$detail = Plan::all();
    	
        return view('welcome')->with(
        	['basics' => $basic,
        	'details' => $detail]);
    }

}
