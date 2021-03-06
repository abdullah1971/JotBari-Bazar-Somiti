<?php

namespace App;

use App\Loan;
use App\Munafa;
use App\Reserve;
use App\Rin_jamindar_info;
use App\Sheyar;
use App\Sonchoy;
use App\TemporaryRinKhelapiInfo;
use App\User_account;
use App\User_info;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'membership_no', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     *
     * relation with sheyar and user table
     *
     */

    /* bikroy */
    
    public function SheyarInfoBikroy()
    {
        
        return $this->hasMany('App\Sheyar', 'to_whom', 'membership_no');
    }


    /* kroy */
    
    public function SheyarInfoKroy()
    {
        
        return $this->hasMany('App\Sheyar', 'user_id', 'membership_no');
    }



    /**
     *
     * relation with sonchoy and user table
     *
     */
    
    public function SonchoyInfo()
    {
        
        return $this->hasMany('App\Sonchoy', 'user_id', 'membership_no');
    }



    /**
     *
     * relation with loan and user table
     *
     */
    
    public function LoanInfo()
    {
        
        return $this->hasMany('App\Loan', 'user_id', 'membership_no');
    }


    /**
     *
     * relation with munafa and user table
     *
     */
    
    public function MunafaInfo()
    {
        
        return $this->hasMany('App\Munafa', 'user_id', 'membership_no');
    }


    
    /**
     *
     * relation with user account and user table
     *
     */
    
    public function UserAccountInfo()
    {
        
        return $this->hasOne('App\User_account', 'user_id', 'membership_no');
    }




    /**
     *
     * relation with user and reserve table
     *
     */
    
    public function ReserveInfo()
    {
        
        return $this->hasMany('App\Reserve', 'subject', 'membership_no');
    }




    /**
     *
     * relation with user and user info table
     *
     */
    
    public function UserOthersInfo()
    {
        
        return $this->hasOne('App\User_info', 'membership_no', 'membership_no');
    }




    /**
     *
     * relation with user and rin khelapi
     *
     */
    
    public function RinKhelapi()
    {
        return $this->hasOne('App\TemporaryRinKhelapiInfo', 'user_id', 'membership_no');
    }



    /**
     *
     * relation with user rin jamindar info for jamindar list
     *
     */
    
    public function JamindarInfo()
    {
        
        return $this->hasMany('App\Rin_jamindar_info', 'user_id', 'membership_no');
    }



    /**
     *
     * relation with user and rin jamindar info for user inof   
     *
     */
    
    // public function FunctionName($value='')
    // {
    //     # code...
    // }


}
