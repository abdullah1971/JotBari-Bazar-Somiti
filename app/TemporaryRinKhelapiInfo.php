<?php

namespace App;

use App\TemporaryClosingInfo;
use App\User;
use Illuminate\Database\Eloquent\Model;

class TemporaryRinKhelapiInfo extends Model
{
    /**
     *
     * relation with rin khelapi info with temporary closing info
     *
     */
    
    public function ClosingInfo()
    {
    	
    	return $this->belongsTo('App\TemporaryClosingInfo', 'closing_date', 'closing_date');
    }



    /**
     *
     * relation with rin khelapi and user basik info
     *
     */
    
    public function UserBasicInfo()
    {
    	
    	return $this->belongsTo('App\User', 'user_id', 'membership_no');
    }
}
