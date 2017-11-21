<?php

namespace App\Console\Commands;

use App\User_account;
use App\User_info;
use Illuminate\Console\Command;

class HappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a birthday message to all user via sms';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        // $user_info_instance = User_info::all();

        // foreach ($user_info_instance as $single_user) {
            
        //     if ($single_user->mobile_no) {
                
        //         SMS::to($single_user->mobile_no)
        //                 ->msg('Dear' . $single_user->membership_no . 'I wish you a happy birthday')->send();
        //     }
        // }


        $user_account_instance = User_account::find(2);

        $user_account_instance->net_sonchoy += 200;

        $user_account_instance->save();




        $this->info('The happy birthday message was sent successfully');
    }
}
