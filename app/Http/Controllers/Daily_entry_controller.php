<?php

namespace App\Http\Controllers;

use App\Daily_entry;
use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use App\User_account;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;

class Daily_entry_controller extends Controller
{
	/* index page show */
    public function index()
    {

        $todayDate = Carbon::now()->toDateString();

        // return $todayDate;

        $daily_entry_instance = Daily_entry::orderBy('updated_at', 'desc')->where('updated_at', 'LIKE' , "%$todayDate%")->get();

        // foreach ($daily_entry_instance as $single_entry) {
            

        //     if ($single_entry->entry_type == "sheyar_and_sell") {
                
        //         return $single_entry->Daily_entry_and_sheyar->UserBasicInfoBikroy->name;
        //     }
        // }
    	
    	return view('company.daily_entry', compact('daily_entry_instance'));
    }


    /* form input take */
    public function fromInfo(Request $request)
    {
        

    	/**
    	
    		TODO:
    		- first take the main category
    		- then make the restriction according to main category
    		- here restriction is make that field required 
    		- and also validate that field
            -
            - after that insert the data where it fits
    	
    	 */


        if ($request->sheyar_subCatagory_input == "sell") {
            
            $user_id = $request->from_sovvo_sodosso_number_input;
        }
        else{

            $user_id = $request->sovvo_sodosso_number_input;
        }

        $user_account_validity_test = User_account::where('user_id', $user_id)->get()->first();

        if ($user_account_validity_test != null && $user_account_validity_test->account_status == "inactive") {
            
            return back()->withInput();
        }

    	
    	if($request->daily_catagory_select == "sheyar"){
 			

    		/**
    		 *
    		 * sheyar
    		 *
    		 */
    		

    		if($request->sheyar_subCatagory_input == "buy"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'number_of_sheyar_input' => 'required',
    				

    			]);

                /* update sheyar table */
                
                $sheyar_instance = new Sheyar;

                $sheyar_instance->user_id = $request->sovvo_sodosso_number_input;
                $sheyar_instance->info_type = $request->sheyar_subCatagory_input;
                $sheyar_instance->sheyar_amount = $request->sheyar_amount_in_money_input;

                $sheyar_instance->save();



                /* update user account table */
                
                $user_account_instance = User_account::where('user_id' , $request->sovvo_sodosso_number_input)->get()->first();

                $previous_sheyar_amount = $user_account_instance->sheyar;
                $user_account_instance->sheyar = $request->number_of_sheyar_input + $previous_sheyar_amount;

                $user_account_instance->save();



                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "sheyar_and_buy";
                $daily_entry_instance->type_entry_id = $sheyar_instance->id;

                $daily_entry_instance->save();




                /* return user to daily_entry page */

                return redirect()->route('daily_entry.home');


    		}
    		else if($request->sheyar_subCatagory_input == "sell"){

    			$this->validate($request, [

    				'from_sovvo_sodosso_number_input' => 'required',
    				'to_sovvo_sodosso_number_input' => 'required',
                    'net_number_of_sheyar_input' => 'required',
    				'selling_amount_of_sheyar_input' => 'required',
    				

    			]);


                if($request->net_number_of_sheyar_input < $request->selling_amount_of_sheyar_input){

                    return back()->withInput();
                }


                /* update sheyar table */
                
                $sheyar_instance = new Sheyar;

                $sheyar_instance->user_id = $request->from_sovvo_sodosso_number_input;
                $sheyar_instance->info_type = $request->sheyar_subCatagory_input;
                $sheyar_instance->sheyar_amount = $request->sheyar_amount_in_money_input;
                $sheyar_instance->to_whom = $request->to_sovvo_sodosso_number_input;

                $sheyar_instance->save();


                /* for who is buying */
                
                $user_account_instance = User_account::where('user_id', $request->to_sovvo_sodosso_number_input)->get()->first();

                // dd($user_account_instance);

                $previous_sheyar_amount = $user_account_instance->sheyar;

                // dd($previous_sheyar_amount + $request->selling_amount_of_sheyar_input);

                $user_account_instance->sheyar = $previous_sheyar_amount + $request->selling_amount_of_sheyar_input;


                $user_account_instance->save();

                // dd($user_account_instance->sheyar);



                /* for who is selling */
                
                $user_account_instance = User_account::where('user_id', $request->from_sovvo_sodosso_number_input)->get()->first();
                // dd($user_account_instance);

                $previous_sheyar_amount = $user_account_instance->sheyar;

                $user_account_instance->sheyar = $previous_sheyar_amount - $request->selling_amount_of_sheyar_input;

                $user_account_instance->save();









                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "sheyar_and_sell";
                $daily_entry_instance->type_entry_id = $sheyar_instance->id;

                $daily_entry_instance->save();



                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');
    		}

    	}
    	else if($request->daily_catagory_select == "sonchoy"){


    		/**
    		 *
    		 * sonchoy
    		 *
    		 */

    		if($request->sonchoy_subCatagory_input == "sonchoy_masik_joma"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'sonchoy_masik_jorimana_input' => 'required',
                    'sonchoy_net_masik_joma_input' => 'required',
    				'sonchoy_joma_date_input' => 'required',

    			]);


                /* increase users sonchoy amount */

                $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

                $user_account_instance->net_sonchoy = $user_account_instance->net_sonchoy + $request->sonchoy_masik_joma_input;

                $user_account_instance->save();




                /* update sonchoy table */
                
                $sonchoy_instance = new Sonchoy;


                $sonchoy_instance->user_id = $request->sovvo_sodosso_number_input;
                $sonchoy_instance->info_type = $request->sonchoy_subCatagory_input;
                $sonchoy_instance->money_amount = $request->sonchoy_masik_joma_input;
                $sonchoy_instance->jorimana_amount = $request->sonchoy_masik_jorimana_input;
                $sonchoy_instance->total_amount = $request->sonchoy_net_masik_joma_input;
                $sonchoy_instance->current_month_sonchoy =  $user_account_instance->net_sonchoy;
                $sonchoy_instance->updated_at = $request->sonchoy_joma_date_input;

                $sonchoy_instance->save();






                /* add jorimana in reserve */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = "sonchoy_masik_jorimana";
                $reserve_instance->subject = $request->sovvo_sodosso_number_input;
                $reserve_instance->money_amount = $request->sonchoy_masik_jorimana_input;
                $reserve_instance->updated_at = $request->sonchoy_joma_date_input;

                $reserve_instance->save();




                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "sonchoy_and_masik_joma";
                $daily_entry_instance->type_entry_id = $sonchoy_instance->id;
                $daily_entry_instance->updated_at = $request->sonchoy_joma_date_input;

                $daily_entry_instance->save();






                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');


    		}
            else if($request->sonchoy_subCatagory_input == "sonchoy_masik_joma_advanced"){

                $this->validate($request, [

                    'sovvo_sodosso_number_input' => 'required',
                    'sonchoy_ogrim_joma_month' => 'required',
                    

                ]);



                // $sonchoy_instance = new Sonchoy;


                // // $sonchoy_instance->user_id = $request->sovvo_sodosso_number_input;
                // // $sonchoy_instance->info_type = $request->sonchoy_subCatagory_input;
                // // $sonchoy_instance->money_amount = $request->sonchoy_masik_joma_input;
                // // $sonchoy_instance->jorimana_amount = $request->sonchoy_masik_jorimana_input;
                // // $sonchoy_instance->total_amount = $request->sonchoy_net_masik_joma_input;

                // $sonchoy_instance->save();

                // /* return user to daily_entry page */
                
                // return redirect()->route('daily_entry.home');
            }
    		else if($request->sonchoy_subCatagory_input == "sonchoy_uttolon"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'sonchoy_uttolon_amount_input' => 'required',

    			]);


                /* reduce users sonchoy amount */

                $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

                /* check whether uttolon amount is less or not than net sonchoy */
                if ($request->sonchoy_net_amount_input > $user_account_instance->net_sonchoy){
                    
                    return back()->withInput();

                }

                $user_account_instance->net_sonchoy = $user_account_instance->net_sonchoy - $request->sonchoy_uttolon_amount_input;

                $user_account_instance->save();
                



                /* update sonchoy table */
                
                $sonchoy_instance = new Sonchoy;


                $sonchoy_instance->user_id = $request->sovvo_sodosso_number_input;
                $sonchoy_instance->info_type = $request->sonchoy_subCatagory_input;
                $sonchoy_instance->money_amount = $request->sonchoy_uttolon_amount_input;
                $sonchoy_instance->current_month_sonchoy =  $user_account_instance->net_sonchoy;

                $sonchoy_instance->save();




                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "sonchoy_and_uttolon";
                $daily_entry_instance->type_entry_id = $sonchoy_instance->id;

                $daily_entry_instance->save();




                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');
    		}
    		
    	}
    	else if ($request->daily_catagory_select == "loan"){

    		/**
    		 *
    		 * loan
    		 *
    		 */
    		if($request->loan_subCatagory_input == "loan_bitoron"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'number_of_sheyar_input' => 'required',
    				'loan_giving_amount_input' => 'required',

    			]);



                /* check if it is 40x of share or not then update user account */
                
                $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

                $elegible_loan_amount = $user_account_instance->sheyar * 4000;

                $loan_can_be_given = $elegible_loan_amount - $user_account_instance->taken_loan_amount + $user_account_instance->paid_loan_amount;

                if($request->loan_giving_amount_input > $loan_can_be_given){

                    // return $elegible_loan_amount;
                    return back()->withInput();
                }
                else{

                    $user_account_instance->taken_loan_amount = $user_account_instance->taken_loan_amount + $request->loan_giving_amount_input;

                    $user_account_instance->save();
                }




                /* update loan table */
                
                $loan_instance = new Loan;


                $loan_instance->user_id = $request->sovvo_sodosso_number_input;
                $loan_instance->info_type = $request->loan_subCatagory_input;
                $loan_instance->money_amount = $request->loan_giving_amount_input;

                $loan_instance->save();




                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "loan_and_bitoron";
                $daily_entry_instance->type_entry_id = $loan_instance->id;

                $daily_entry_instance->save();






                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');

    		}
    		else if($request->loan_subCatagory_input == "loan_joma"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_now_pay_input' => 'required',
                    'loan_remaining_pay_input' => 'required',
    				'loan_joma_date_input' => 'required',

    			]);



                /* update user account */
                
                $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();


                if($request->loan_now_pay_input > $user_account_instance->taken_loan_amount){

                    return back()->withInput();
                }
                else{

                    $user_account_instance->paid_loan_amount = $user_account_instance->paid_loan_amount + $request->loan_now_pay_input;

                    $user_account_instance->save();
                }




                /* update loan table */
                
                $loan_instance = new Loan;


                $loan_instance->user_id = $request->sovvo_sodosso_number_input;
                $loan_instance->info_type = $request->loan_subCatagory_input;
                $loan_instance->money_amount = $request->loan_now_pay_input;
                $loan_instance->updated_at = $request->loan_joma_date_input;

                $loan_instance->save();




                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "loan_and_joma";
                $daily_entry_instance->type_entry_id = $loan_instance->id;
                $daily_entry_instance->updated_at = $request->loan_joma_date_input;

                $daily_entry_instance->save();




                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');



    		}
    		else if($request->loan_subCatagory_input == "loan_masik_munafa"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_masik_munafa_joma_input' => 'required',
    				'loan_masik_jorimana_input' => 'required',
                    'loan_net_masik_joma_input' => 'required',
    				'loan_net_masik_joma_input' => 'required',

    			]);



                /* update munafa table */

                $munafa_instance = new Munafa;

                $munafa_instance->user_id = $request->sovvo_sodosso_number_input;
                $munafa_instance->amount = $request->loan_net_masik_joma_input;
                $munafa_instance->updated_at = $request->loan_net_masik_joma_input;

                $munafa_instance->save();




                /* add jorimana in reserve */
                
                // $reserve_instance = new Reserve;

                // $reserve_instance->info_type = "loan_masik_jorimana";
                // $reserve_instance->subject = $request->sovvo_sodosso_number_input;
                // $reserve_instance->money_amount = $request->loan_masik_jorimana_input;

                // $reserve_instance->save();




                /* update loan table */
                
                $loan_instance = new Loan;


                $loan_instance->user_id = $request->sovvo_sodosso_number_input;
                $loan_instance->info_type = $request->loan_subCatagory_input;
                $loan_instance->money_amount = $request->loan_masik_munafa_joma_input;
                $loan_instance->jorimana_amount = $request->loan_masik_jorimana_input;
                $loan_instance->total_amount = $request->loan_net_masik_joma_input;
                $loan_instance->updated_at = $request->loan_net_masik_joma_input;

                $loan_instance->save();




                /* update daily_entry table */
                
                $daily_entry_instance = new Daily_entry;

                $daily_entry_instance->entry_type = "loan_and_masik_joma";
                $daily_entry_instance->type_entry_id = $loan_instance->id;
                $daily_entry_instance->updated_at = $request->loan_net_masik_joma_input;

                $daily_entry_instance->save();


                /* return user to daily_entry page */
                
                return redirect()->route('daily_entry.home');
    		}
    	}
        else if($request->daily_catagory_select == "bibidh"){


            /**
             *
             * bibidh
             *
             */

            if ($request->bibidh_subCatagory_input == "income" && $request->bibidh_ay_option_input != "others") {

                // return $request->bibidh_ay_option_input;
                
                $this->validate($request, [

                        'bibidh_ay_option_input' => 'required',
                        'bibidh_money_amount_input' => 'required',
                    ]);


                /* update reserve table */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = $request->bibidh_subCatagory_input;
                $reserve_instance->subject = $request->bibidh_ay_option_input;
                $reserve_instance->money_amount = $request->bibidh_money_amount_input;

                $reserve_instance->save();


            }
            else if ($request->bibidh_subCatagory_input == "income" && $request->bibidh_ay_option_input == "others") {

                // return $request->bibidh_ay_option_input;
                
                $this->validate($request, [

                        'bibidh_ay_option_input' => 'required',
                        'bibidh_biboron_input' => 'required',
                        'bibidh_money_amount_input' => 'required',
                    ]);


                /* update reserve table */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = $request->bibidh_subCatagory_input;
                $reserve_instance->subject = $request->bibidh_biboron_input;
                $reserve_instance->money_amount = $request->bibidh_money_amount_input;

                $reserve_instance->save();



            }
            else if ($request->bibidh_subCatagory_input == "spent") {
                
                $this->validate($request, [

                        'bibidh_uddesso_input' => 'required',
                        'bibidh_money_amount_input' => 'required',
                    ]);


                /* update reserve table */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = $request->bibidh_subCatagory_input;
                $reserve_instance->subject = $request->bibidh_uddesso_input;
                $reserve_instance->money_amount = $request->bibidh_money_amount_input;

                $reserve_instance->save();


            }



            



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



            /* return user to daily_entry page */
            
            return redirect()->route('daily_entry.home');

            
        }
        else if($request->daily_catagory_select == "munafa_theke_khoroch"){


            /**
             *
             * munafa theke khoroch
             *
             */
            $this->validate($request, [

                    'munafa_theke_khoroch_uddesso_input' => 'required',
                    'munafa_theke_khoroch_money_amount_input' => 'required',
                ]);



            /* munafa theke khoroch table update */
            
            $munafa_theke_khoroch_instance = new Munafa_theke_khoroch;

            $munafa_theke_khoroch_instance->subject = $request->munafa_theke_khoroch_uddesso_input;

            $munafa_theke_khoroch_instance->money_amount = $request->munafa_theke_khoroch_money_amount_input;

            $munafa_theke_khoroch_instance->save();



            /* update daily_entry table */
            
            $daily_entry_instance = new Daily_entry;

            $daily_entry_instance->entry_type = "munafa_theke_khoroch";
            $daily_entry_instance->type_entry_id = $munafa_theke_khoroch_instance->id;

            $daily_entry_instance->save();




            /* return user to daily_entry page */
            
            return redirect()->route('daily_entry.home');


        }
    	
    	

    	return $request->all();
    }


    public function Get_all_data_about_specified_user(Request $request)
    {
        
        $user_account_info = User_account::where('user_id', $request->sovvo_sodosso_number)->get()->first();

        $current_time = Carbon::now();

        if ($current_time->month >= 2 && $current_time->month <= 7) {
            
            // $time = "abc";
            $starting_date = $current_time->year."-02-01";
            $end_date = $current_time->year."-07-31";
        }
        else{

            // $time = "def";
            $starting_date = $current_time->year."-08-01";
            $end_date = ($current_time->year + 1 )."-01-31";
        }

        $sonchoy_instance = Sonchoy::where('user_id', $request->sovvo_sodosso_number)
                                    ->where('info_type', 'sonchoy_masik_joma')
                                    ->whereDate('updated_at', '>=', $starting_date)
                                    ->whereDate('updated_at', '<=', $end_date)
                                    ->get();


        $loan_taking_instance = Loan::where('user_id', $request->sovvo_sodosso_number)
                                    ->where('info_type', 'loan_bitoron')
                                    ->get();

        $loan_giving_instance = Loan::where('user_id', $request->sovvo_sodosso_number)
                                    ->where('info_type', 'loan_joma')
                                    ->get();

        $loan_masik_munafa_instance = Loan::where('user_id', $request->sovvo_sodosso_number)
                                    ->where('info_type', 'loan_masik_munafa')
                                    ->whereDate('updated_at', '>=', $starting_date)
                                    ->whereDate('updated_at', '<=', $end_date)
                                    ->get();


        // $temp = '<th style="text-align: center;">শোধের পরিমান</th>';

        /**
         *
         * loan taking info
         *
         */
        
        $loan_taking_table = '<table class="table table-hover table-striped">
                    
                            <thead>
                                  <tr>
                                    <th style="text-align: center;">লোনের পরিমান</th>
                                    <th style="text-align: center;">তারিখ </th>
                                  </tr>
                            </thead>
                                <tbody style="text-align: center; font-size: 22px;">';


        $temp_loan_taking_table_info = "";

        foreach ($loan_taking_instance as $single_loan) {
            
            $tempDate = $single_loan->updated_at->formatLocalized('%A %d %B %Y');
            
            $temp = "<tr>
                        <td>$single_loan->money_amount</td>
                        <td>$tempDate</td>                                    
                    </tr>  ";

            $temp_loan_taking_table_info = $temp_loan_taking_table_info.$temp;
        }
                   
        $loan_taking_table = $loan_taking_table.$temp_loan_taking_table_info.'</tbody>

                        </table>';


        /**
         *
         * loan giving info
         *
         */
        

        $loan_giving_table = '<table class="table table-hover table-striped">
                    
                            <thead>
                                  <tr>
                                    <th style="text-align: center;">শোধের পরিমান</th>
                                    <th style="text-align: center;">তারিখ </th>
                                  </tr>
                            </thead>
                                <tbody style="text-align: center; font-size: 22px;">';


        $temp_loan_giving_table_info = "";

        foreach ($loan_giving_instance as $single_loan) {
            
            $tempDate = $single_loan->updated_at->formatLocalized('%A %d %B %Y');
            
            $temp = "<tr>
                        <td>$single_loan->money_amount</td>
                        <td>$tempDate</td>                                    
                    </tr>  ";

            $temp_loan_giving_table_info = $temp_loan_giving_table_info.$temp;
        }
                   
        $loan_giving_table = $loan_giving_table.$temp_loan_giving_table_info.'</tbody>

                        </table>';

        /**
         *
         * loan masik munafa info
         *
         */
        

        $loan_masik_munafa_table = '<table class="table table-hover table-striped">
                    
                            <thead>
                                  <tr>
                                    <th style="text-align: center;">মাসিক জমা</th>
                                    <th style="text-align: center;">জরিমানা</th>
                                    <th style="text-align: center;">মোট জমা</th>
                                    <th style="text-align: center;">তারিখ </th>
                                  </tr>
                            </thead>
                                <tbody style="text-align: center; font-size: 22px;">';


        $temp_loan_masik_munafa_table_info = "";

        foreach ($loan_masik_munafa_instance as $single_loan) {
            
            $tempDate = $single_loan->updated_at->formatLocalized('%A %d %B %Y');
            
            $temp = "<tr>
                        <td>$single_loan->money_amount</td>
                        <td>$single_loan->jorimana_amount</td>
                        <td>$single_loan->total_amount</td>
                        <td>$tempDate</td>                                    
                    </tr>  ";

            $temp_loan_masik_munafa_table_info = $temp_loan_masik_munafa_table_info.$temp;
        }
                   
        $loan_masik_munafa_table = $loan_masik_munafa_table.$temp_loan_masik_munafa_table_info.'</tbody>

                        </table>';



        /**
         *
         * sonchoy masik joma info
         *
         */
        

        $sonchoy_masik_munafa_table = '<table class="table table-hover table-striped">
                    
                            <thead>
                                  <tr>
                                    <th style="text-align: center;">মাসিক জমা</th>
                                    <th style="text-align: center;">জরিমানা</th>
                                    <th style="text-align: center;">মোট জমা</th>
                                    <th style="text-align: center;">তারিখ </th>
                                  </tr>
                            </thead>
                                <tbody style="text-align: center; font-size: 22px;">';


        $temp_sonchoy_masik_munafa_table_info = "";

        foreach ($sonchoy_instance as $single_sonchoy) {
            
            $tempDate = $single_sonchoy->updated_at->formatLocalized('%A %d %B %Y');
            
            $temp = "<tr>
                        <td>$single_sonchoy->money_amount</td>
                        <td>$single_sonchoy->jorimana_amount</td>
                        <td>$single_sonchoy->total_amount</td>
                        <td>$tempDate</td>                                    
                    </tr>  ";

            $temp_sonchoy_masik_munafa_table_info = $temp_sonchoy_masik_munafa_table_info.$temp;
        }
                   
        $sonchoy_masik_munafa_table = $sonchoy_masik_munafa_table.$temp_sonchoy_masik_munafa_table_info.'</tbody>

                        </table>';



        // return $user_account_info;
        // $user_account_info = $request->all();

        return Response()->json(['user_info' => $user_account_info, 'sonchoy' => $sonchoy_masik_munafa_table, 'loan_uttolon' => $loan_taking_table, 'loan_joma' => $loan_giving_table, 'loan_masik_munafa' => $loan_masik_munafa_table]);

    }




    /**
     *
     * delete notification
     *
     */
    
    public function DeleteNotification($id)
    {
        
        $daily_entry_instance = Daily_entry::find($id);

        $daily_entry_type = $daily_entry_instance->entry_type;

        $entry_type_id = $daily_entry_instance->type_entry_id;


        if($daily_entry_type == "sheyar_and_buy"){

            /**
             *
             * sheyar buy
             *
             */
            

            $entry_type_instance  = Sheyar::find($entry_type_id);

                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->sheyar -= ($entry_type_instance->sheyar_amount / 100);
                $user_account_instance->save();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "sheyar_and_sell"){

            /**
             *
             * sheyar sell
             *
             */

            $entry_type_instance  = Sheyar::find($entry_type_id);

                /* who sells */
                
                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->sheyar += ($entry_type_instance->sheyar_amount / 100);
                $user_account_instance->save();

                /* whow buys */
                
                $user_account_instance = User_account::where('user_id' , $entry_type_instance->to_whom)->get()->first();
                $user_account_instance->sheyar -= ($entry_type_instance->sheyar_amount / 100);
                $user_account_instance->save();


            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "sonchoy_and_masik_joma"){

            /**
             *
             * sonchoy joma
             *
             */
            

            $entry_type_instance  = Sonchoy::find($entry_type_id);

                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->net_sonchoy -= ($entry_type_instance->total_amount);
                $user_account_instance->save();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "sonchoy_and_uttolon"){


            /**
             *
             * sonchoy uttolon
             *
             */
            

            $entry_type_instance  = Sonchoy::find($entry_type_id);

                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->net_sonchoy += ($entry_type_instance->money_amount);
                $user_account_instance->save();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "loan_and_bitoron"){


            /**
             *
             * loan bitoron
             *
             */
            
            $entry_type_instance  = Loan::find($entry_type_id);

                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->taken_loan_amount -= ($entry_type_instance->money_amount);
                $user_account_instance->save();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "loan_and_joma"){


            /**
             *
             * loan joma
             *
             */
            
            $entry_type_instance  = Loan::find($entry_type_id);

                $user_account_instance = User_account::where('user_id' , $entry_type_instance->user_id)->get()->first();
                $user_account_instance->paid_loan_amount -= ($entry_type_instance->money_amount);
                $user_account_instance->save();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "loan_and_masik_joma"){


            /**
             *
             * loan masik munafa 
             *
             */
            
            $entry_type_instance  = Loan::find($entry_type_id);

                $munafa_instance = Munafa::where('user_id', $entry_type_instance->user_id)
                                            ->get()->first();
                $munafa_instance->delete();

            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "reserve_and_income"){

            /**
             *
             * reserve income
             *
             */
            
            $entry_type_instance  = Reserve::find($entry_type_id);
            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "reserve_and_spent"){

            /**
             *
             * reserve spend
             *
             */
            
            $entry_type_instance  = Reserve::find($entry_type_id);
            $entry_type_instance->delete();
        }
        else if($daily_entry_type == "munafa_theke_khoroch"){

            /**
             *
             * munafa theke khoroch
             *
             */
            
            $entry_type_instance  = Munafa_theke_khoroch::find($entry_type_id);
            $entry_type_instance->delete();
        }


        $daily_entry_instance->delete();


        return redirect()->route('daily_entry.home');

    }
}
