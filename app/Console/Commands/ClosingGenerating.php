<?php

namespace App\Console\Commands;

use App\ClosingInfo;
use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Sheyar;
use App\TemporaryClosingInfo;
use App\TemporaryRinKhelapiInfo;
use App\User_account;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClosingGenerating extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:closing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate closing for reviewing closing and editing';

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

        /**
         *
         * set the starting and ending time
         *
         */
        
        $current_date = Carbon::now();

        $current_month = $current_date->month;

        if($current_month > 7){

            $starting_time = $current_date->year."-08-01";
            $end_time = ($current_date->year + 1)."-01-31";
        }
        else{

            $starting_time = $current_date->year."-02-01";
            $end_time = $current_date->year."-07-31";
        }



        /**
         *
         * (sheyar + sonchoy / net munafa) *100
         *
         */
        
        $closing_info_instance = ClosingInfo::all();

        foreach ($closing_info_instance as $single_closing_info) {
            
            $last_closing_info = $single_closing_info;
        }



        $sheyar_amount = $last_closing_info->sheyar_aday;

        $sonchoy_amount = $last_closing_info->sonchoy_aday;

        // $sheyar_amount = Sheyar::sum('sheyar_amount');

        // $sonchoy_amount = User_account::sum('net_sonchoy');

        $total_user = User_account::count();

        $net_capital = $sheyar_amount + $sonchoy_amount;
        
        $munafa_amount = Munafa::whereDate('updated_at', '>=', $starting_time)
                                ->whereDate('updated_at', '<=', $end_time)
                                ->sum('amount');

        $munafa_theke_khoroch = Munafa_theke_khoroch::whereDate('updated_at', '>=', $starting_time)->whereDate('updated_at', '<=', $end_time)
                            ->sum('money_amount');

        $net_munafa = $munafa_amount - $munafa_theke_khoroch;


        $percentage = ($net_munafa / $net_capital) * 100;




        /**
         *
         * create a list of rin khelapi
         *
         */

        $list_of_rin_khelapi = [];
        

        /* whoes net sonchoy is less than total loan */
        
        $user_account_instance = User_account::all();

        foreach ($user_account_instance as $single_user) {
            
            if ($single_user->net_sonchoy < ( $single_user->taken_loan_amount - $single_user->paid_loan_amount)) {
                

                array_push($list_of_rin_khelapi, $single_user->user_id);
            }
        }

        // dd($list_of_rin_khelapi);


        /* whoes net sonchoy is greater than loan but didn't give loan munafa in last month */
        
        $current_month = $current_date->year."-".$current_date->month;

        $munafa_instance = Munafa::where('updated_at', 'LIKE', "%$current_month%")->get();

        // dd($munafa_instance);

        $munafa_given_user_list = [];

        foreach ($munafa_instance as $single_munafa) {
            
            array_push($munafa_given_user_list, $single_munafa->user_id);
        }

        sort($munafa_given_user_list);

        $munafa_given_user_list = array_unique($munafa_given_user_list);

        // dd($munafa_given_user_list);



        $list_of_user = User_account::orderBy('user_id')->get();
        // dd($list_of_user);
        $j = 0;

        foreach ($list_of_user as $single_user) {
            
            // echo "$single_user->user_id<br>";
            if(!in_array($single_user->user_id, $munafa_given_user_list)){

                array_push($list_of_rin_khelapi, $single_user->user_id);

                // echo $single_user->user_id."<br><br>";
            }
        }


        $list_of_rin_khelapi = array_unique($list_of_rin_khelapi);
        sort($list_of_rin_khelapi);

        $rin_khelapi_total_user = count($list_of_rin_khelapi);

        /* remove all the members who have no loan */
        
        
        for ($i=0; $i < $rin_khelapi_total_user; $i++) { 
            
            $temp = $list_of_rin_khelapi[$i];

            $user_account_instance = User_account::where('user_id', $temp)->get()->first();

            if ($user_account_instance->taken_loan_amount - $user_account_instance->paid_loan_amount == 0) {
                
                unset($list_of_rin_khelapi[$i]);
            }
        }

        $rin_khelapi_total_user = count($list_of_rin_khelapi);
        




        /**
         *
         * store data on temporary tables
         *
         */
        
        /* closing info */
        
        $temporary_closing_info_instance = new TemporaryClosingInfo;

        $temporary_closing_info_instance->closing_date = $end_time;
        $temporary_closing_info_instance->total_sheyar = $sheyar_amount;
        $temporary_closing_info_instance->total_sonchoy = $sonchoy_amount;
        $temporary_closing_info_instance->member_amount = $total_user;
        $temporary_closing_info_instance->munafa_theke_income = $munafa_amount;
        $temporary_closing_info_instance->munafa_theke_spend = $munafa_theke_khoroch;
        $temporary_closing_info_instance->rin_khelapi_amount = $rin_khelapi_total_user;
        $temporary_closing_info_instance->percentage = $percentage;

        $temporary_closing_info_instance->save();


        /* rin khelapi info */


        foreach ($list_of_rin_khelapi as $single_rin_khelapi) {
            
            $rin_khelapi_info_instance = new TemporaryRinKhelapiInfo;

            $rin_khelapi_info_instance->closing_date = $end_time;
            $rin_khelapi_info_instance->user_id = $single_rin_khelapi;

            $rin_khelapi_info_instance->save();
        }

        $this->info('successfully closing generated');

    }
}
