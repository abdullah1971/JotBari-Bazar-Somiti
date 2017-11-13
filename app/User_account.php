<?php

namespace App;

use App\Loan;
use App\Sonchoy;
use App\User;
use Illuminate\Database\Eloquent\Model;

class User_account extends Model
{
    protected $fillable = [
        'user_id', 'sheyar', 'fixed_sonchoy', 'net_sonchoy', 'taken_loan_amount', 'paid_loan_amount', 'account_status',
    ];


    /**
     *
     * relation with sonchoy and user account table
     *
     */
    
    public function SonchoyInfoFromUserAccount()
    {
    	
    	return $this->hasMany('App\Sonchoy', 'user_id', 'user_id');
    }



    /**
     *
     * relation with loan and user account table
     *
     */
    
    public function LoanInfoFromUserAccount()
    {
    	
    	return $this->hasMany('App\Loan', 'user_id', 'user_id');
    }
}
