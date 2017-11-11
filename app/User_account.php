<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_account extends Model
{
    protected $fillable = [
        'user_id', 'sheyar', 'fixed_sonchoy', 'net_sonchoy', 'taken_loan_amount', 'paid_loan_amount', 'account_status',
    ];
}
