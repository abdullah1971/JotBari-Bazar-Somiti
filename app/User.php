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



    // public function User_sheyar_details()
    // {
        
    //     return $this->hasMany(Sheyar::class, 'membership_no', 'user_id');
    // }
}
