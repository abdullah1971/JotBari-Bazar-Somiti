<?php

namespace App;

use App\Daily_entry;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    /**
     *
     * relation with daily_entry and reserve
     *
     */
    
    public function Reserve_daily_entry()
    {
    	
    	return $this->belongsTo('App\Daily_entry', 'id');
    }



    /**
     *
     * relation with reserve and user table
     *
     */
    
    public function UserBasicInfo()
    {
        
        return $this->belongsTo('App\User', 'subject', 'membership_no');
    }
}
