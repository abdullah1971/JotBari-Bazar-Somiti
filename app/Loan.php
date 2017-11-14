<?php

namespace App;

use App\Daily_entry;
use App\User;
use App\User_account;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    
    /**
     *
     * relation with daily_entry and loan
     *
     */
    
    public function Loan_daily_entry()
    {
    	
    	return $this->belongsTo('App\Daily_entry', 'id');
    }


    /**
     *
     * relation with user and loan table
     *
     */
    
    public function UserBasicInfo()
    {
        
        return $this->belongsTo('App\User', 'user_id', 'membership_no');
    }



    /**
     *
     * relation with user account and loan table
     *
     */
    
    public function UserAccountInfo()
    {
        
        return $this->belongsTo('App\User_account', 'user_id', 'user_id');
    }
}
