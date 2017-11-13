<?php

namespace App;

use App\Daily_entry;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Munafa extends Model
{
    /**
     *
     * relation with daily_entry and munafa
     *
     */
    
    public function Munafa_daily_entry()
    {
    	
    	return $this->belongsTo('App\Daily_entry', 'id');
    }



    /**
     *
     * relation with user and munafa table
     *
     */
    
    public function UserBasicInfo()
    {
        
        return $this->belongsTo('App\User', 'user_id');
    }
}
