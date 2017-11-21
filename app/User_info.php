<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    

    /**
     *
     * relation with user info and user table
     *
     */
    
    public function UserBasicInfo()
    {
    	
    	return $this->belongsTo('App\User', 'membership_no', 'membership_no');
    }
}
