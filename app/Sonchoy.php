<?php

namespace App;

use App\Daily_entry;
use App\User;
use App\User_account;
use Illuminate\Database\Eloquent\Model;

class Sonchoy extends Model
{
    /**
     *
     * relation with daily_entry and sonchoy
     *
     */
    
    public function Sonchoy_daily_entry()
    {
    	
    	return $this->belongsTo('App\Daily_entry', 'id');
    }


    /**
     *
     * relation with user and sonchoy table
     *
     */
    
    public function UserBasicInfo()
    {
        
        return $this->belongsTo('App\User', 'user_id', 'membership_no');
    }


    /**
     *
     * relation with user account and sonchoy table
     *
     */
    
    public function UserAccountInfo()
    {
        
        return $this->belongsTo('App\User_account', 'user_id', 'user_id');
    }
}
