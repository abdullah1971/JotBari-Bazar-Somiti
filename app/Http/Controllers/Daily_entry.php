<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use App\User_account;
use Illuminate\Http\Request;

class Daily_entry extends Controller
{
	/* index page show */
    public function index()
    {
    	
    	return view('company.daily_entry');
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

                $sheyar_instance = new Sheyar;


                $sheyar_instance->user_id = $request->sovvo_sodosso_number_input;
                $sheyar_instance->info_type = $request->sheyar_subCatagory_input;
                $sheyar_instance->sheyar_amount = $request->sheyar_amount_in_money_input;

                $sheyar_instance->save();



                $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

                $previous_sheyar_amount = $user_account_instance->sheyar;

                $user_account_instance->sheyar = $request->number_of_sheyar_input + $previous_sheyar_amount;

                $user_account_instance->save();


                /* return user to daily_entry page */

                return redirect()->route('company.daily_entry.home');


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


                $sheyar_instance = new Sheyar;


                $sheyar_instance->user_id = $request->from_sovvo_sodosso_number_input;
                $sheyar_instance->info_type = $request->sheyar_subCatagory_input;
                $sheyar_instance->sheyar_amount = $request->sheyar_amount_in_money_input;
                $sheyar_instance->to_whom = $request->to_sovvo_sodosso_number_input;


                $sheyar_instance->save();


                /* for who is selling */
                
                $user_account_instance = User_account::find($request->from_sovvo_sodosso_number_input);

                $previous_sheyar_amount = $user_account_instance->sheyar;

                $user_account_instance->sheyar = $previous_sheyar_amount - $request->selling_amount_of_sheyar_input;

                $user_account_instance->save();


                /* for who is buying */
                
                $user_account_instance = User_account::find($request->to_sovvo_sodosso_number_input);

                $previous_sheyar_amount = $user_account_instance->sheyar;

                $user_account_instance->sheyar = $previous_sheyar_amount + $request->selling_amount_of_sheyar_input;

                $user_account_instance->save();



                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');
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

    			]);

                /* update sonchoy table */
                
                $sonchoy_instance = new Sonchoy;


                $sonchoy_instance->user_id = $request->sovvo_sodosso_number_input;
                $sonchoy_instance->info_type = $request->sonchoy_subCatagory_input;
                $sonchoy_instance->money_amount = $request->sonchoy_masik_joma_input;
                $sonchoy_instance->jorimana_amount = $request->sonchoy_masik_jorimana_input;
                $sonchoy_instance->total_amount = $request->sonchoy_net_masik_joma_input;

                $sonchoy_instance->save();



                /* increase users sonchoy amount */
                $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

                $user_account_instance->net_sonchoy = $user_account_instance->net_sonchoy + $request->sonchoy_masik_joma_input;

                $user_account_instance->save();



                /* add jorimana in reserve */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = "sonchoy_masik_jorimana";
                $reserve_instance->subject = $request->sovvo_sodosso_number_input;
                $reserve_instance->money_amount = $request->sonchoy_masik_jorimana_input;

                $reserve_instance->save();


                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');


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
                
                // return redirect()->route('company.daily_entry.home');
            }
    		else if($request->sonchoy_subCatagory_input == "sonchoy_uttolon"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'sonchoy_uttolon_amount_input' => 'required',

    			]);


                

                $sonchoy_instance = new Sonchoy;


                $sonchoy_instance->user_id = $request->sovvo_sodosso_number_input;
                $sonchoy_instance->info_type = $request->sonchoy_subCatagory_input;
                $sonchoy_instance->money_amount = $request->sonchoy_net_amount_input;
                

                $sonchoy_instance->save();


                /* reduce users sonchoy amount */
                $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

                $user_account_instance->net_sonchoy = $user_account_instance->net_sonchoy - $request->sonchoy_net_amount_input;

                $user_account_instance->save();



                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');
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
                
                $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

                $elegible_loan_amount = $user_account_instance->sheyar * 40;

                $loan_can_be_given = $elegible_loan_amount - $user_account_instance->taken_loan_amount + $user_account_instance->paid_loan_amount;

                if($request->loan_giving_amount_input > $loan_can_be_given){

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


                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');

    		}
    		else if($request->loan_subCatagory_input == "loan_joma"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_now_pay_input' => 'required',
    				'loan_remaining_pay_input' => 'required',

    			]);



                /* update user account */
                
                $user_account_instance = User_account::find($request->sovvo_sodosso_number_input);

                

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

                $loan_instance->save();


                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');



    		}
    		else if($request->loan_subCatagory_input == "loan_masik_munafa"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_masik_munafa_joma_input' => 'required',
    				'loan_masik_jorimana_input' => 'required',
    				'loan_net_masik_joma_input' => 'required',

    			]);



                /* update munafa table */

                $munafa_instance = new Munafa;

                $munafa_instance->user_id = $request->sovvo_sodosso_number_input;
                $munafa_instance->amount = $request->loan_masik_munafa_joma_input;

                $munafa_instance->save();


                /* add jorimana in reserve */
                
                $reserve_instance = new Reserve;

                $reserve_instance->info_type = "loan_masik_jorimana";
                $reserve_instance->subject = $request->sovvo_sodosso_number_input;
                $reserve_instance->money_amount = $request->loan_masik_jorimana_input;

                $reserve_instance->save();



                /* update loan table */
                
                $loan_instance = new Loan;


                $loan_instance->user_id = $request->sovvo_sodosso_number_input;
                $loan_instance->info_type = $request->loan_subCatagory_input;
                $loan_instance->money_amount = $request->loan_masik_munafa_joma_input;
                $loan_instance->jorimana_amount = $request->loan_masik_jorimana_input;
                $loan_instance->total_amount = $request->loan_net_masik_joma_input;

                $loan_instance->save();


                /* return user to daily_entry page */
                
                return redirect()->route('company.daily_entry.home');
    		}
    	}
        else if($request->daily_catagory_select == "bibidh"){


            /**
             *
             * bibidh
             *
             */
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



            /* return user to daily_entry page */
            
            return redirect()->route('company.daily_entry.home');

            
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


            /* return user to daily_entry page */
            
            return redirect()->route('company.daily_entry.home');


        }
    	
    	

    	return $request->all();
    }


    public function Get_all_data_about_specified_user(Request $request)
    {
        
        $user_account_info = User_account::find($request->sovvo_sodosso_number);

        // return $user_account_info;
        // $user_account_info = $request->all();

        return Response()->json(['user_info' => $user_account_info]);

    }
}
