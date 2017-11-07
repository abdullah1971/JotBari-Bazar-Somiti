<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daily_entry extends Controller
{
	/* index page show */
    public function index()
    {
    	
    	return view('daily_entry');
    }


    /* form input take */
    public function fromInfo(Request $request)
    {
    	return $request->all();
    }
}
