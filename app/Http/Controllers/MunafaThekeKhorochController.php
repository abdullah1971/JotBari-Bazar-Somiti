<?php

namespace App\Http\Controllers;

use App\Munafa_theke_khoroch;
use Illuminate\Http\Request;

class MunafaThekeKhorochController extends Controller
{
    
    /**
     *
     * munafa theke khoroch info
     *
     */
    
    public function ShowMunafaThekeKHorochInfo()
    {
    	
    	$munafa_theke_khoroch_instance = Munafa_theke_khoroch::orderBy('updated_at', 'desc')->paginate(5);

    	return view('company.company_munafa_theke_khoroch', compact('munafa_theke_khoroch_instance'));
    }
}
