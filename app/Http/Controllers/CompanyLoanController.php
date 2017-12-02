<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Rin_jamindar_info;
use App\User_account;
use Illuminate\Http\Request;

class CompanyLoanController extends Controller
{
    
    /* loan bitoron */
    
    public function LoanBiboron()
    {
    	
    	$user_account_instance = User_account::paginate(5);

    	return view('company.company_loan_biboron', compact('user_account_instance'));
    }


    /* loan masik munafa */
    
    public function LoanMasikMunafa()
    {
    	
    	$loan_instance = Loan::where('info_type', 'loan_masik_munafa')->orderBy('updated_at', 'dec')->paginate(5);

    	return view('company.company_loan_masik_munafa', compact('loan_instance'));
    }



    /**
     *
     * loan er jamindar info show
     *
     */
    
    public function SingleLoanGivingInfo()
    {
        return view('company.company_loan_jamindar_info');
    }



    /**
     *
     * loan er jamindar info submit
     *
     */
    
    public function SingleLoanGivingInfoSubmit(Request $request)
    {
        
        // return $request->all();

        $this->validate($request, [

            'sovvo_sodosso_number_input' => 'required',
            'jamindar_ovivabok_name_input' => 'required',
            'jamindar_ovivabok_father_name_input' => 'required',
            'jamindar_ovivabok_address_input' => 'required',
            'jamindar_ovivabok_mobile_no_input' => 'required',
            'jamindar_sodosso_no_input' => 'required',

        ]);

        $rin_jamindar_info_instance = new Rin_jamindar_info;

        $rin_jamindar_info_instance->user_id = $request->sovvo_sodosso_number_input;
        $rin_jamindar_info_instance->jamindar_ovivabok_name = $request->jamindar_ovivabok_name_input;
        $rin_jamindar_info_instance->jamindar_ovivabok_father_name = $request->jamindar_ovivabok_father_name_input;
        $rin_jamindar_info_instance->jamindar_ovivabok_address = $request->jamindar_ovivabok_address_input;
        $rin_jamindar_info_instance->jamindar_ovivabok_mobile_no = $request->jamindar_ovivabok_mobile_no_input;
        $rin_jamindar_info_instance->jamindar_sodosso_id = $request->jamindar_ovivabok_mobile_no_input;


        $rin_jamindar_info_instance->save();

        return redirect()->route('daily_entry.home');

    }
}
