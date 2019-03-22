<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class WelcomeController extends Controller
{
    public function index()
    {
		$basic = Plan::where('plan',"=",'Basic')->get();

    	$standard = Plan::where('plan',"=",'Standard')->get();

    	$premium = Plan::where('plan',"=",'Premium')->get();

    	
    	
        return view('welcome')->with(
        	['basics' => $basic,
        	'standards' => $standard,
        	'premiums' => $premium]);
    }
   public function mail()
   {
   		return view('mails.enquirymail');
   }
}
