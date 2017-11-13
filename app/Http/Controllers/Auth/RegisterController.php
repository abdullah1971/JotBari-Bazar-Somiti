<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\User_account;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';



    /* custom redirection */
    protected function redirectTo()
    {

        /* get user */
        $user = Auth::user();

        /* check whether user or admin */
        if($user->membership_no == "12233344440"){

            return '/daily_entry';
            
        }
        else{


            return '/user_info';
        }


    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'membership_no' => 'required|digits_between:1,5000000|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'membership_no' => $data['membership_no'],
            'password' => bcrypt($data['password']),
        ]);

        $user_id = $user->id;

        User_account::create([

            'user_id' => $data['membership_no'],
            'sheyar' => 0,
            'fixed_sonchoy' => 0,
            'net_sonchoy' => 0,
            'taken_loan_amount' => 0,
            'paid_loan_amount' => 0,
            'account_status' => "active",

        ]);

        return $user;
    }
}
