<?php

namespace App\Http\Controllers;

use App\Reserve;
use Illuminate\Http\Request;

class CompanyReserveController extends Controller
{
    
    /* income */
    
    public function Income()
    {
    	
    	$reserve_instance = Reserve::where('info_type', '!=', 'spent')->orderBy('updated_at', 'dec')->paginate(10);

    	// dd($reserve_instance);

    	return view('company.company_reserve_income', compact('reserve_instance'));
    }


    /* spend */
    
    public function Spend()
    {
    	
    	$reserve_instance = Reserve::where('info_type', 'spent')->orderBy('updated_at', 'dec')->paginate(10);

    	return view('company.company_reserve_spend', compact('reserve_instance'));
    }
}
