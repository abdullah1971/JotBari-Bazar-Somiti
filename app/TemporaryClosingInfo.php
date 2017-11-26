<?php

namespace App;

use App\TemporaryRinKhelapiInfo;
use Illuminate\Database\Eloquent\Model;

class TemporaryClosingInfo extends Model
{
    /**
     *
     * relation with temporary closing info with rin khelapi info
     *
     */
    
    public function ListOfRinKhelapi()
    {
    	
    	return $this->hasMany('App\TemporaryRinKhelapiInfo', 'closing_date', 'closing_date');
    }
}
