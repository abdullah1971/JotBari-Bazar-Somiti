<?php

namespace App;

use App\Daily_entry;
use Illuminate\Database\Eloquent\Model;

class Munafa_theke_khoroch extends Model
{
    /**
     *
     * relation with daily_entry and munafa theke khoroch
     *
     */
    
    public function Munafa_theke_khoroch_daily_entry()
    {
    	
    	return $this->belongsTo('App\Daily_entry', 'id');
    }
}
