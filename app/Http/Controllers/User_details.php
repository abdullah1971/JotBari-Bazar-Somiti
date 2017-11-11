<?php

namespace App\Http\Controllers;

use App\User_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_details extends Controller
{
    public function Index()
    {
    	
    	return view('user.user_info');
    }


    public function Update_page()
    {

    	$user = Auth::user();

    	// return $user;

    	$user_info_instance = User_info::where('membership_no' , $user->membership_no)->get();



    	if($user_info_instance->isEmpty()){

    		$info_status = false;

    		return view('user.user_info_update', compact('info_status', 'user'));
    	}
    	else{

    		$info_status = true;

    		return view('user.user_info_update', compact('user_info_instance', 'info_status', 'user'));
    		
    	}
    	
    }
}
