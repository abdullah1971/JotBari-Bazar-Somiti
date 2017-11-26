<?php

namespace App\Http\Controllers;

use App\TemporaryClosingInfo;
use App\TemporaryRinKhelapiInfo;
use App\User_account;
use Illuminate\Http\Request;

class ClosingController extends Controller
{
    
    /**
     *
     * show upcoming closing info
     *
     */
    
    public function ShowUpcompingClosingInfo()
    {
    	
    	$temporary_closing_info_instance = TemporaryClosingInfo::all();

    	foreach ($temporary_closing_info_instance as $single_closing_info) {
    		
    		$closing_info = $single_closing_info;
    	}



        /**
         *
         * calculate the money need to give this percentage 
         *
         */
        
        $net_money = 0;

        $user_account_instance = User_account::all();

        foreach ($user_account_instance as $single_account) {
            
            $user_sheyar = $single_account->sheyar * 100;
            $user_sonchoy = $single_account->net_sonchoy;

            $user_net_money = $user_sheyar + $user_sonchoy;

            $temp_money = floor(($user_net_money * $closing_info->percentage) / 100);

            $net_money += $temp_money;
        }

        $actual_money_need = $closing_info->munafa_theke_income - $closing_info->munafa_theke_spend;


        if($net_money >= $actual_money_need){

            $status = "money need";

            $money_amount = $net_money - $actual_money_need;
        }
        else{

            $status = "money extra";

            $money_amount = $actual_money_need - $net_money;
        }


    	return view('company.company_upcoming_closing_info', compact('closing_info', 'status', 'money_amount'));


    }


    /**
     *
     * percentage adjustment
     *
     */
    
    public function PercentageAdjustment(Request $request)
    {
        
        $percentage = $request->percentage;

        $temporary_closing_info_instance = TemporaryClosingInfo::all();

        foreach ($temporary_closing_info_instance as $single_closing_info) {
            
            $closing_info = $single_closing_info;
        }


        /**
         *
         * calculate the starting and end date of the closing
         *
         */
        

        $closing_date = $closing_info->closing_date;

        $closing_date_part = explode('-', $closing_date);

        if($closing_date_part[1] == "01"){


            $starting_date = ($closing_date_part[0] - 1)."-08-01";
            $end_date = $closing_date;
        }
        else if($closing_date_part[1] == "07"){

            $starting_date = $closing_date_part[0]."-02-01";
            $end_date = $closing_date;
        }


        /**
         *
         * calculate the money need to give this percentage 
         *
         */
        
        $net_money = 0;

        $user_account_instance = User_account::all();

        foreach ($user_account_instance as $single_account) {
            
            $user_sheyar = $single_account->sheyar * 100;
            $user_sonchoy = $single_account->net_sonchoy;

            $user_net_money = $user_sheyar + $user_sonchoy;

            $temp_money = floor(($user_net_money * $percentage) / 100);

            $net_money += $temp_money;
        }

        $actual_money_need = $closing_info->munafa_theke_income - $closing_info->munafa_theke_spend;


        if($net_money >= $actual_money_need){

            $status = "money need";

            $money_amount = $net_money - $actual_money_need;
        }
        else{

            $status = "money extra";

            $money_amount = $actual_money_need - $net_money;
        }


        return Response()->json(['status' => $status, 'money_amount' => $money_amount]);
    }



    /**
     *
     * remove rin khelapi
     *
     */
    
    public function RemoveRinKhelapi($id)
    {
        
        $rin_khelapi_instance = TemporaryRinKhelapiInfo::find($id);

        $rin_khelapi_instance->delete();

        return redirect()->route('company.upcoming_closing_info');
    }



    /**
     *
     * update upcoming closing percentage
     *
     */
    
    public function UpdatePercentage(Request $request)
    {
        
        $temporary_closing_info_instance = TemporaryClosingInfo::all();

        foreach ($temporary_closing_info_instance as $single_closing_info) {
            
            $last_closing_info = $single_closing_info;
        }


        $last_closing_info->percentage = $request->closing_percentage_input;

        $last_closing_info->save();

        return redirect()->route('company.upcoming_closing_info');
    }
}
