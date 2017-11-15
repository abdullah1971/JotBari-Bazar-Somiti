<?php

namespace App\Http\Controllers;

use App\Loan;
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
}
