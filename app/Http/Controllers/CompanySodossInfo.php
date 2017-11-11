<?php

namespace App\Http\Controllers;

use App\User_account;
use Illuminate\Http\Request;

class CompanySodossInfo extends Controller
{
    public function index()
    {
    	
    	return view('company.company_member_page');
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
    	return view('company.company_member_fix_sonchoy');
    }


    public function masik_sonchoy_setting_store(Request $request)
    {
    	
    	/**
         *
         * have not implemented that sonchoy_fix_amount can only be set after closing
         *
         */

        $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

        $user_account_instance->fixed_sonchoy = $request->sonchoy_monthly_fix_amount_input;

        $user_account_instance->save();

        return redirect()->route('company.company_sodosso.masik_sonchoy_set');
    }
}
