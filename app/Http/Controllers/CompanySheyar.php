<?php

namespace App\Http\Controllers;

use App\Sheyar;
use Illuminate\Http\Request;

class CompanySheyar extends Controller
{
    
    /**
     *
     * company all sheyar
     *
     */
    
    public function AllSheyar()
    {

    	/* using pagination */

    	$sheyar_instance = new Sheyar;

    	$sheyar_info = $sheyar_instance->orderBy('updated_at', 'desc')->paginate(2);


    	return view('company.company_sheyar', compact('sheyar_info'));
    }



    public function KroySheyar()
    {
    	
    	/* using pagination */

    	$sheyar_instance = new Sheyar;

    	$sheyar_info = $sheyar_instance->where('info_type', 'buy')->orderBy('updated_at', 'desc')->paginate(2);


    	return view('company.company_sheyar_kroy', compact('sheyar_info'));
    }



    public function BiroySheyar()
    {
    	
    	/* using pagination */

    	$sheyar_instance = new Sheyar;

    	$sheyar_info = $sheyar_instance->where('info_type', 'sell')->orderBy('updated_at', 'desc')->paginate(2);

        // foreach ($sheyar_info as $single_sheyar) {
            
        //     return $single_sheyar->UserBasicInfoBikroy->membership_no;
        // }


    	return view('company.company_sheyar_bikroy', compact('sheyar_info'));
    }
    
}
