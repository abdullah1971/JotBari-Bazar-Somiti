<?php

namespace App\Http\Controllers;

use App\Sonchoy;
use App\User_account;
use Illuminate\Http\Request;

class CompanySonchoyController extends Controller
{
    
    /* net sonchoy */
    public function NetSonchoy()
    {
    	
    	$user_account_instance = User_account::paginate(5);

    	return view('company.company_sonchoy_net_amount', compact('user_account_instance'));
    }


    /* fixed monthly sonchoy */
    public function FixedSonchoy()
    {
    	
    	$user_account_instance = User_account::paginate(5);

    	return view('company.company_sonchoy_monthly_fixed', compact('user_account_instance'));
    }


    /* sonchoy masik joma */
    public function MasikJoma()
    {
    	
    	$sonchoy_instance = Sonchoy::orderBy('updated_at', 'dec')->where('info_type', 'sonchoy_masik_joma')->paginate(5);

    	return view('company.company_sonchoy_masik_joma', compact('sonchoy_instance'));
    }


    /* sonchoy uttolon */
    public function Uttolon()
    {
    	
    	$sonchoy_instance = Sonchoy::orderBy('updated_at', 'dec')->where('info_type', 'sonchoy_uttolon')->paginate(5);

    	return view('company.company_sonchoy_uttolon', compact('sonchoy_instance'));
    }
}
