<?php

namespace App;

use App\Daily_entry;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Sheyar extends Model
{
   	
   	/**
   	 *
   	 * relation with sheyar and user table
   	 *
   	 */
   	
      /* bikroy */
      
   	public function UserBasicInfoBikroy(){
         
      return $this->belongsTo('App\User', 'to_whom');

    }

      /* kroy */
      
    public function UserBasicInfoKroy(){
   		
   		return $this->belongsTo('App\User', 'user_id');

   	}



    /**
     *
     * relation with daily_entry and sheyar
     *
     */
    
    public function Sheyar_daily_entry(){
       
       return $this->belongsTo('App\Daily_entry', 'id');
    }
}
