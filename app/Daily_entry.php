<?php

namespace App;

use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use Illuminate\Database\Eloquent\Model;

class Daily_entry extends Model
{
    
    /**
     *
     * relation with daily entry and sheyars
     *
     */
    
    public function Daily_entry_and_sheyar()
    {
    	
    	return $this->hasOne('App\Sheyar', 'id', 'type_entry_id');
    }


    /**
     *
     * relation with daily entry and sonchoys
     *
     */
    
    public function Daily_entry_and_sonchoy()
    {
    	
    	return $this->hasOne('App\Sonchoy', 'id', 'type_entry_id');
    }



    /**
     *
     * relation with daily entry and sonchoys
     *
     */
    
    public function Daily_entry_and_loan()
    {
    	
    	return $this->hasOne('App\Loan', 'id', 'type_entry_id');
    }



    /**
     *
     * relation with daily entry and reserve
     *
     */
    
    public function Daily_entry_and_reserve()
    {
    	
    	return $this->hasOne('App\Reserve', 'id', 'type_entry_id');
    }



    /**
     *
     * relation with daily entry and munafa
     *
     */
    
    public function Daily_entry_and_munafa()
    {
    	
    	return $this->hasOne('App\Munafa', 'id', 'type_entry_id');
    }



    /**
     *
     * relation with daily entry and munafa_theke_khoroch
     *
     */
    
    public function Daily_entry_and_munafa_theke_khoroch()
    {
    	
    	return $this->hasOne('App\Munafa_theke_khoroch', 'id', 'type_entry_id');
    }
    
}
