<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daily_entry extends Controller
{
	/* index page show */
    public function index()
    {
    	
    	return view('daily_entry');
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
    		}
    		else if($request->sheyar_subCatagory_input == "sell"){

    			$this->validate($request, [

    				'from_sovvo_sodosso_number_input' => 'required',
    				'to_sovvo_sodosso_number_input' => 'required',
    				'number_of_sheyar_input' => 'required',
    				

    			]);
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
    		}
            else if($request->sonchoy_subCatagory_input == "sonchoy_uttolon"){

                $this->validate($request, [

                    'sovvo_sodosso_number_input' => 'required',
                    'sonchoy_ogrim_joma_month' => 'required',
                    

                ]);
            }
    		else if($request->sonchoy_subCatagory_input == "sonchoy_uttolon"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'sonchoy_uttolon_amount_input' => 'required',

    			]);
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
    		}
    		else if($request->loan_subCatagory_input == "loan_joma"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_now_pay_input' => 'required',
    				'loan_remaining_pay_input' => 'required',

    			]);
    		}
    		else if($request->loan_subCatagory_input == "loan_masik_munafa"){

    			$this->validate($request, [

    				'sovvo_sodosso_number_input' => 'required',
    				'loan_masik_munafa_joma_input' => 'required',
    				'loan_masik_jorimana_input' => 'required',
    				'loan_net_masik_joma_input' => 'required',

    			]);
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
        }
    	
    	

    	return $request->all();
    }
}
