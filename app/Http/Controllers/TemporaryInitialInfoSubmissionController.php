<?php

namespace App\Http\Controllers;

use App\Daily_entry;
use App\Http\Controllers\ConvertDate;
use App\Loan;
use App\Munafa;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use App\User_account;
use Illuminate\Http\Request;

class TemporaryInitialInfoSubmissionController extends Controller
{

	// /**
	//  *
	//  * convert form date to server type date 
	//  *
	//  */
	// public function ConvertDate($date)
	// {
		
	// 	$temp_date = explode('/', $date);

	// 	$day = $temp_date[0];
	// 	$month = $temp_date[1];
	// 	$year = $temp_date[2];


	// 	return $day;
	// }




    /**
     *
     * sheyar info ( kroy ) show
     *
     */

    public function SheyarKroyInfo()
    {
        
        return view('company.company_temp_sheyar_kroy');
    }

    public function SheyarKroyInfoUpdate(Request $request)
    {
        
        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }


        /* sheyar table */
        $sheyar_instance = new Sheyar;

        $sheyar_instance->user_id = $request->sovvo_sodosso_number_input;
        $sheyar_instance->info_type = "buy";
        $sheyar_instance->sheyar_amount = $request->number_of_sheyar_input * 100;

        $date = ConvertDate($request->date_input);

        $sheyar_instance->created_at = $date;
        $sheyar_instance->updated_at = $date;


        $sheyar_instance->save();


        /* user account table */
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->sheyar = $user_account_instance->sheyar + $request->number_of_sheyar_input;
        $user_account_instance->updated_at = $date;

        $user_account_instance->save();



        /* update daily_entry table */
        
        $daily_entry_instance = new Daily_entry;

        $daily_entry_instance->entry_type = "sheyar_and_buy";
        $daily_entry_instance->type_entry_id = $sheyar_instance->id;
        $daily_entry_instance->updated_at = $date;

        $daily_entry_instance->save();



        return redirect()->route('company.temp_sheyar_info');
    }




    /**
     *
     * sheyar info (bikroy) show
     *
     */
    
    public function SheyarbiKroyInfo()
    {
        
        return view('company.company_temp_sheyar_bikroy');
    }


    public function SheyarbiKroyInfoUpdate(Request $request)
    {
        
        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }


        $date = $request->date_input;





        /* update sheyar table */
        
        $sheyar_instance = new Sheyar;

        $sheyar_instance->user_id = $request->from_sovvo_sodosso_number_input;
        $sheyar_instance->info_type = "sell";
        $sheyar_instance->sheyar_amount = $request->number_of_sheyar_input * 100;
        $sheyar_instance->to_whom = $request->to_sovvo_sodosso_number_input;

        $sheyar_instance->created_at = $date;
        $sheyar_instance->updated_at = $date;

        $sheyar_instance->save();


        /* for who is buying */
        
        $user_account_instance = User_account::where('user_id', $request->to_sovvo_sodosso_number_input)->get()->first();

        // dd($user_account_instance);

        $previous_sheyar_amount = $user_account_instance->sheyar;

        // dd($previous_sheyar_amount + $request->selling_amount_of_sheyar_input);

        $user_account_instance->sheyar = $previous_sheyar_amount + $request->number_of_sheyar_input;

        $user_account_instance->updated_at = $date;


        $user_account_instance->save();

        // dd($user_account_instance->sheyar);



        /* for who is selling */
        
        $user_account_instance = User_account::where('user_id', $request->from_sovvo_sodosso_number_input)->get()->first();
        // dd($user_account_instance);

        $previous_sheyar_amount = $user_account_instance->sheyar;

        $user_account_instance->sheyar = $previous_sheyar_amount - $request->number_of_sheyar_input;

        $user_account_instance->updated_at = $date;

        $user_account_instance->save();









        /* update daily_entry table */
        
        $daily_entry_instance = new Daily_entry;

        $daily_entry_instance->entry_type = "sheyar_and_sell";
        $daily_entry_instance->type_entry_id = $sheyar_instance->id;


        $daily_entry_instance->updated_at = $date;

        $daily_entry_instance->save();


        return redirect()->route('company.temp_sheyar_bikroy_info');
    }





    
    /* sonchoy form show */
    public function SonchoyInfo()
    {
    	return view('company.company_temp_sonchoy_update');
    }


    /**
     *
     * sonchoy form info and insert in table
     *
     */
    public function SonchoyInfoPost(Request $request)
    {



    	function ConvertDate1($date)
    	{
    		
    		$temp_date = explode('/', $date);

    		$day = $temp_date[0];
    		$month = $temp_date[1];
    		$year = $temp_date[2];


    		if (strlen($day) == 1) {
    			
    			$day = "0".$day;
    		}

    		if (strlen($month) == 1) {
    			
    			$month = "0".$month;
    		}

    		$year = "20".$year;

    		return $date = $year."-".$month."-".$day;


    	}



    	
    	$user_account_instance = User_account::where('user_id', $request->member_no)->get()->first();


    	$sonchoy_instance = new Sonchoy;

    	$sonchoy_instance->user_id = $request->member_no;
    	$sonchoy_instance->info_type = $request->info_type;
    	$sonchoy_instance->money_amount = $request->money_amount;

    	if ($request->info_type == "sonchoy_masik_joma") {
    		
	    	$sonchoy_instance->jorimana_amount = $request->jorimana_amount;
	    	$sonchoy_instance->total_amount = $request->total_amount;
	    	$sonchoy_instance->current_month_sonchoy = $user_account_instance->net_sonchoy + $sonchoy_instance->total_amount;



            /* add jorimana in reserve */
            
            $reserve_instance = new Reserve;

            $reserve_instance->info_type = "sonchoy_masik_jorimana";
            $reserve_instance->subject = $request->member_no;
            $reserve_instance->money_amount = $request->jorimana_amount;
            $reserve_instance->updated_at = ConvertDate1($request->date);

            $reserve_instance->save();
    		
    	}
    	else{

    		$sonchoy_instance->current_month_sonchoy = $user_account_instance->net_sonchoy + $sonchoy_instance->money_amount;
    		
    	}

    	$sonchoy_instance->created_at = ConvertDate1($request->date);
    	$sonchoy_instance->updated_at = ConvertDate1($request->date);


    	$sonchoy_instance->save();




    	$user_account_instance->net_sonchoy = $sonchoy_instance->current_month_sonchoy;
    	$user_account_instance->save();



        /* update daily_entry table */
        
        

        if ($request->info_type == "sonchoy_masik_joma") {

            $daily_entry_instance = new Daily_entry;
           
            $daily_entry_instance->entry_type = "sonchoy_and_masik_joma";
            $daily_entry_instance->type_entry_id = $sonchoy_instance->id;
            $daily_entry_instance->updated_at = ConvertDate1($request->date);

            $daily_entry_instance->save();
            
        }
        else if ($request->info_type == "sonchoy_uttolon") {

            $daily_entry_instance = new Daily_entry;
            
            $daily_entry_instance->entry_type = "sonchoy_and_uttolon";
            $daily_entry_instance->type_entry_id = $sonchoy_instance->id;
            $daily_entry_instance->updated_at = ConvertDate1($request->date);

            $daily_entry_instance->save();
        }

        



    	return redirect()->route('company.sonchoy_info');
    }





    /**
     *
     * loan bitoron info
     *
     */
    public function LoanBitoron()
    {
        return view('company.company_temp_loan_bitoron');
    }


    public function LoanBitoronUpdate(Request $request)
    {
        
        /**
        
            TODO:
            - date
            - loan table
            - user account
            - daily entry
        
         */

        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }

        $date = ConvertDate($request->date_input);

        /* loan table */
        
        $loan_instance = new Loan;

        $loan_instance->user_id = $request->sovvo_sodosso_number_input;
        $loan_instance->info_type = "loan_bitoron";
        $loan_instance->money_amount = $request->money_amount_input;
        $loan_instance->updated_at = $date;

        $loan_instance->save();


        /* user account table */
        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->taken_loan_amount = $user_account_instance->taken_loan_amount + $request->money_amount_input;

        $user_account_instance->updated_at = $date;

        $user_account_instance->save();


        /* daily entry table */
        
        $daily_entry_instance = new Daily_entry;

        $daily_entry_instance->entry_type = "loan_and_bitoron";
        $daily_entry_instance->type_entry_id = $loan_instance->id;
        $daily_entry_instance->updated_at = $date;

        $daily_entry_instance->save();


        return redirect()->route('company.temp_loan_bitoron');
        
    }



    /**
     *
     * loan joma info
     *
     */
    
    public function Loanjoma()
    {
        
        return view('company.company_temp_loan_joma');
    }

    public function LoanjomaUpdate(Request $request)
    {
        
        /**
        
            TODO:
            - date
            - loan table
            - user account
            - daily entry
        
         */

        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }

        $date = ConvertDate($request->date_input);

        /* loan table */
        
        $loan_instance = new Loan;

        $loan_instance->user_id = $request->sovvo_sodosso_number_input;
        $loan_instance->info_type = "loan_joma";
        $loan_instance->money_amount = $request->money_amount_input;
        $loan_instance->updated_at = $date;

        $loan_instance->save();


        /* user account table */
        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->paid_loan_amount = $user_account_instance->paid_loan_amount + $request->money_amount_input;

        $user_account_instance->updated_at = $date;

        $user_account_instance->save();


        /* daily entry table */
        
        $daily_entry_instance = new Daily_entry;

        $daily_entry_instance->entry_type = "loan_and_joma";
        $daily_entry_instance->type_entry_id = $loan_instance->id;
        $daily_entry_instance->updated_at = $date;

        $daily_entry_instance->save();


        return redirect()->route('company.temp_loan_joma');
    }





    /**
     *
     * loan masik munafa show
     *
     */
    
    public function Loanmasik_munafa()
    {
        
        return view('company.company_temp_loan_masik_munafa');
    }

    public function Loanmasik_munafaUpdate(Request $request)
    {
        
        /**
        
            TODO:
            - date
            - loan table
            - munafa table
            - daily entry
        
         */

        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }

        $date = ConvertDate($request->date_input);

        /* loan table */
        
        $loan_instance = new Loan;

        $loan_instance->user_id = $request->sovvo_sodosso_number_input;
        $loan_instance->info_type = "loan_masik_munafa";
        $loan_instance->money_amount = $request->loan_masik_munafa_joma_input;
        $loan_instance->jorimana_amount = $request->loan_masik_jorimana_input;
        $loan_instance->total_amount = $request->money_amount_input;
        $loan_instance->updated_at = $date;

        $loan_instance->save();


        /* munafa table */
        
        $munafa_instance = new Munafa;

        $munafa_instance->user_id = $request->sovvo_sodosso_number_input;
        $munafa_instance->amount = $request->money_amount_input;
        $munafa_instance->updated_at = $date;

        $munafa_instance->save();


        /* daily entry table */
        
        $daily_entry_instance = new Daily_entry;

        $daily_entry_instance->entry_type = "loan_and_masik_joma";
        $daily_entry_instance->type_entry_id = $loan_instance->id;
        $daily_entry_instance->updated_at = $date;

        $daily_entry_instance->save();


        return redirect()->route('company.temp_loan_masik_munafa');

    }



    /**
     *
     * reserv info show
     *
     */
    
    public function ReserveInfo()
    {
        return view('company.company_temp_reserve_ay');
    }

    public function ReserveInfoUpdate(Request $request)
    {
        
        /**
        
            TODO:
            - date
            - reserve table
            - daily entry
        
         */



        function ConvertDate($date)
        {
            
            $temp_date = explode('/', $date);

            $day = $temp_date[0];
            $month = $temp_date[1];
            $year = $temp_date[2];


            if (strlen($day) == 1) {
                
                $day = "0".$day;
            }

            if (strlen($month) == 1) {
                
                $month = "0".$month;
            }

            $year = "20".$year;

            return $date = $year."-".$month."-".$day;


        }

        $date = ConvertDate($request->date_input);
        
        /* reserve table */
        
        $reserve_instance = new Reserve;

        if ($request->bibidh_subCatagory_input == "income") {
            
            $reserve_instance->info_type = "income";
        }
        else{

            $reserve_instance->info_type = "spent";
        }

        $reserve_instance->subject = $request->bibidh_uddesso_input;
        $reserve_instance->money_amount = $request->bibidh_money_amount_input;
        $reserve_instance->updated_at = $date;

        $reserve_instance->save();



        /* update daily_entry table */
            
        $daily_entry_instance = new Daily_entry;

        if ($request->bibidh_subCatagory_input == "income") {
            
            $daily_entry_instance->entry_type = "reserve_and_income";
            
        }
        elseif ($request->bibidh_subCatagory_input == "spent") {

            $daily_entry_instance->entry_type = "reserve_and_spent";

        }

        $daily_entry_instance->type_entry_id = $reserve_instance->id;

        $daily_entry_instance->save();


        return redirect()->route('company.temp_reserve_info');
        

    }





    /**
     *
     * net sonchoy (user account table)
     *
     */
    
    public function NetSonchoy()
    {
        return view('company.company_temp_last_net_sonchoy');
    }

    public function NetSonchoyUpdate(Request $request)
    {
        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->net_sonchoy = $request->money_amount_input;

        $user_account_instance->save();

        return redirect()->route('company.temp_net_sonchoy_info');
    }



    /**
     *
     * fix sonchoy (user account table)
     *
     */
    
    public function SonchoyFix()
    {
        return view('company.company_temp_fix_masik_sonchoy');
    }

    public function SonchoyFixUpdate(Request $request)
    {
        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->fixed_sonchoy = $request->money_amount_input;

        $user_account_instance->save();

        return redirect()->route('company.temp_sonchoy_fix_info');
    }




    /**
     *
     * loan (user account table)
     *
     */
    
    public function TempLoan()
    {
        return view('company.company_temp_last_loan_amount');
    }

    public function TempLoanUpdate(Request $request)
    {
        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        $user_account_instance->taken_loan_amount = $request->money_amount_input;

        $user_account_instance->save();

        return redirect()->route('company.temp_loan_info');
    }
}
