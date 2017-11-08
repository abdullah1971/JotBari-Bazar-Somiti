<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanySodossInfo extends Controller
{
    public function index()
    {
    	
    	return view('company_member_page');
    }

    /**
     *
     * masik sonchoy set in two function
     * 
     * masik_sonchoy_set and masik_sonchoy_setting_store
     *
     */
    
    public function masik_sonchoy_set()
    {
    	return view('company_member_fix_sonchoy');
    }


    public function masik_sonchoy_setting_store(Request $request)
    {
    	
    	return $request->all();
    }
}
