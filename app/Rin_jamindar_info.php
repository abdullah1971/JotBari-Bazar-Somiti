<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rin_jamindar_info extends Model
{
    
    /**
     *
     * relation with user and rin jamindar info
     *
     */
    
    public function UserBasicInfo()
    {
    	
    	return $this->belongsTo('App\User', 'jamindar_sodosso_id', 'membership_no');
    }
}
