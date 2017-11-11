<?php

namespace App\Http\Controllers;

use App\Sheyar;
use App\User_account;
use App\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_details extends Controller
{
    public function Index()
    {

    	$user = Auth::user();

    	$user_info_instance = User_info::where('membership_no' , $user->membership_no)->get()->first();

    	$user_account_instance = User_account::where('user_id' , $user->membership_no)->get()->first();
    	
    	return view('user.user_info', compact('user', 'user_info_instance', 'user_account_instance'));
    }


    public function Update_page()
    {

    	$user = Auth::user();

    	$user_info_instance = User_info::where('membership_no' , $user->membership_no)->get()->first();


    	if(!$user_info_instance){

    		$info_status = false;

    		return view('user.user_info_update', compact('info_status', 'user'));
    	}
    	else{

    		$info_status = true;


    		return view('user.user_info_update', compact('user_info_instance', 'info_status', 'user'));
    		
    	}
    	
    }


    /* user info update / store */
    
    public function Update_page_store(Request $request)
    {
    	
    	
    	$this->validate($request, [

    		'user_father_name_input' => 'string',
    		'user_mother_name_input' => 'string',
    		'user_husbandORwife_name_input' => 'string',
    		'present_address_input' => 'string',
    		'permanent_address_input' => 'string',
    		'date_of_being_user_input' => 'string',
    		'mobile_no_input' => 'numeric',
    		'user_image_input' => 'image|size:5100',

    	]);

    	$user = Auth::user();

    	/* check whether data has been stored or not */
    	
    	$user_info_instance = User_info::where('membership_no' , $user->membership_no)->get();

    	if($user_info_instance->isEmpty()){

    		$user_info_instance = new User_info;

    	}
    	else{

    		$user_info_instance = User_info::where('membership_no' , $user->membership_no)->get()->first();

    	}

    	
    	$user_instance = Auth::user();



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


    	if ($request->hasFile('user_image_input')) {


    		$image_name = $request->user_image_input->getClientOriginalName();

    		$path = $request->user_image_input->storeAs('public/images', $image_name);

    		// return $path;
    		$user_info_instance->image_path = $image_name;
    	}


    	$user_info_instance->save();

    	return redirect()->route('user.info_details');

    }



    /* user sheyar all */
    
    public function Sheyar_all()
    {
        
        $user = Auth::user();

        $sheyar_instance = Sheyar::where('user_id' , $user->membership_no)->get();

        return view('user.user_sheyar_all', compact('sheyar_instance'));
    }



    /* user sheyar kroy */
    
    public function Sheyar_kroy()
    {
        
        $user = Auth::user();

        $sheyar_instance = Sheyar::where('user_id' , $user->membership_no)
                                    ->where('info_type' , 'buy')->get();



        return view('user.user_sheyar_kroy', compact('sheyar_instance'));

    }


    /* user sheyar bikroy */
    
    public function Sheyar_sell()
    {
        
        $user = Auth::user();

        $sheyar_instance = Sheyar::where('user_id' , $user->membership_no)
                                    ->where('info_type' , 'sell')->get();

        // foreach ($sheyar_instance as $sheyar) {
            
        //      dd($sheyar->userPrimary()->membership_no);
        // }

        return view('user.user_sheyar_bikroy', compact('sheyar_instance'));
    }
}



