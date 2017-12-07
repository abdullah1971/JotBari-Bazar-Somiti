<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Sheyar;
use App\Sonchoy;
use App\User;
use App\User_account;
use App\User_info;
use Illuminate\Http\Request;

class CompanySodossInfo extends Controller
{
    public function index()
    {
    	
    	return view('company.company_member_page');
    }

    /**
     *
     * masik sonchoy set in two function
     * 
     * masik_sonchoy_set and masik_sonchoy_setting_store
     *
     */
    
    public function masik_sonchoy_set()
    {
    	return view('company.company_member_fix_sonchoy');
    }


    public function masik_sonchoy_setting_store(Request $request)
    {
    	
    	/**
         *
         * have not implemented that sonchoy_fix_amount can only be set after closing
         *
         */

        $user_account_instance = User_account::find($request->company_member_page_sovvo_sodosso_number_input);

        $user_account_instance->fixed_sonchoy = $request->sonchoy_monthly_fix_amount_input;

        $user_account_instance->save();

        return redirect()->route('company_sodosso.masik_sonchoy_set');
    }



    /**
     *
     * sodoss info ajax
     *
     */
    
    public function SodossoInfo(Request $request)
    {
        
        $user_number = $request->user_number;

        $user_instance = User::where('membership_no', $user_number)->get()->first();

        $user_account_instance = User_account::where('user_id', $user_number)->get()->first();

        $user_info_instance = User_info::where('membership_no', $user_number)->get()->first();

        return Response()->json(['user' => $user_instance, 'user_account' => $user_account_instance, 'user_info' => $user_info_instance]);
    }



    /**
     *
     * user update page 
     *
     */
    
    public function UpdateInfoPage()
    {
        
        return view('company.company_member_info_update');
    }



    /**
     *
     * update or store user info
     *
     */
    
    public function StoreOrUpdateUserInfo(Request $request)
    {
        
        // return $request->all();

        $this->validate($request, [

            // 'user_membership_no' => 'required',
            'user_father_name_input' => 'nullable | string',
            'user_mother_name_input' => 'nullable | string',
            'user_husbandORwife_name_input' => 'nullable | string',
            'present_address_input' => 'nullable | string',
            'permanent_address_input' => 'nullable | string',
            'permanent_address_input' => 'nullable | string',
            'nominee_name_input' => 'nullable | string',
            'nominee_relation_input' => 'nullable | string',
            // 'mobile_no_input' => 'numeric',
            // 'user_image_input' => 'image|size:5100',

        ]);

        // return $request->all();

        $user_membership_no = $request->user_membership_no;

        /* check whether data has been stored or not */
        
        $user_info_instance = User_info::where('membership_no' , $user_membership_no)->get();

        if($user_info_instance->isEmpty()){

            $user_info_instance = new User_info;

        }
        else{

            $user_info_instance = User_info::where('membership_no' , $user_membership_no)->get()->first();

        }

        
        $user_instance = User::where('membership_no', $user_membership_no)->get()->first();

        // return $user_membership_no;

        /* user name */
        
        $user_instance->name = $request->user_name_input;
        $user_instance->save();

        /* other user info */
        
        $user_info_instance->membership_no = $user_instance->membership_no;
        $user_info_instance->user_father_name = $request->user_father_name_input;
        $user_info_instance->user_mother_name = $request->user_mother_name_input;
        $user_info_instance->user_husbandORwife_name = $request->user_husbandORwife_name_input;
        $user_info_instance->present_address = $request->present_address_input;
        $user_info_instance->permanent_address = $request->permanent_address_input;
        $user_info_instance->mobile_no = $request->mobile_no_input;
        $user_info_instance->date_of_being_user = $request->date_of_being_user_input;
        $user_info_instance->nominee_name = $request->nominee_name_input;
        $user_info_instance->nominee_relation = $request->nominee_relation_input;


        if ($request->hasFile('user_image_input')) {


            // return "something";


            $image_name = $user_instance->membership_no."_".$request->user_image_input->getClientOriginalName();

            $path = $request->user_image_input->storeAs('public/images', $image_name);

            // return $path;
            $user_info_instance->image_path = $image_name;
        }


        $user_info_instance->save();

        return redirect()->route('company_sodosso.home');
    }


    /**
     *
     * sheyar info
     *
     */
    
    public function SodossoSheyarInfo($id = null)
    {
        
        $sheyar_info = Sheyar::where('user_id', $id)->paginate(2);

        // return $sheyar_info;

        // if(!$sheyar_info->isEmpty())
        //     return "something";
        // else
        //     return "nothing";

        return view('company.company_member_sheyar', compact('sheyar_info'));
    }



    /**
     *
     * sodosso info (post route)
     *
     */
    
    public function SingleSodossoSheyarInfo(Request $request, $id = null)
    {
        
        // return $request->all();
        $user_id = $request->sovvo_sodosso_number_input;


        return redirect()->route('company.sodoss_sheyar_info', ['id' => $user_id]);
    }




    /**
     *
     * sonchoy biboron
     *
     */
    
    public function SodossoSonchoyInfo($id = null)
    {
        

        $sonchoy_info = Sonchoy::where('user_id' , $id)->paginate(7);

        return view('company.company_member_sonchoy', compact('sonchoy_info'));
    }



    /**
     *
     * sonchoy info (post)
     *
     */
    
    public function SingleSodossoSonchoyInfo(Request $request, $id = null)
    {
        // return $request->all();
        
        $user_id = $request->sovvo_sodosso_number_input;

        return redirect()->route('company.sodosso_sonchoy_info', ['id' => $user_id]);
    }



    /**
     *
     * sodosso loan info
     *
     */
    
    public function SodossoLoanInfo($id = null)
    {
        
        $loan_info = Loan::where('user_id', $id)->paginate(5);


        return view('company.company_member_loan', compact('loan_info'));
    }



    /**
     *
     * sodosso loan info (post)
     *
     */
    
    public function SingleSodossoLoanInfo(Request $request, $id = null)
    {
        
        $user_id = $request->sovvo_sodosso_number_input;

        return redirect()->route('company.sodosso__loan_info', ['id' => $user_id]);
    }



    /**
     *
     * sodosso delete
     *
     */
    public function DeleteSodosso()
    {
        return view('company.company_sodosso_batil');
    }



    /**
     *
     * sodosso delete info 
     *
     */
    
    public function DeleteSodossoInfo(Request $request)
    {
        $this->validate($request, [

            'sovvo_sodosso_number_input' => 'required|numeric',

        ]);

        
        $user_account_instance = User_account::where('user_id', $request->sovvo_sodosso_number_input)->get()->first();

        if ($user_account_instance) {
            
            $user_account_instance->account_status = "inactive";

            $user_account_instance->net_sonchoy = 0;

            $user_account_instance->taken_loan_amount = 0;

            $user_account_instance->paid_loan_amount = 0;

            $user_account_instance->fixed_sonchoy = 0;

            $user_account_instance->save();




            return redirect()->route('company_sodosso.home');
        }
        else{
            return back()->withInput();
        }

    }
}
