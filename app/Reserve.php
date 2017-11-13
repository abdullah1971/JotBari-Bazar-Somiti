<?php

namespace App;

use App\Daily_entry;
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
}
