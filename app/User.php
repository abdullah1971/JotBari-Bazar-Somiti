<?php

namespace App;

use App\Sheyar;
use App\User_account;
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


}
