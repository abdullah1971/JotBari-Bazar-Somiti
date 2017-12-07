<?php

namespace App\Console\Commands;

use App\ClosingInfo;
use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use App\TemporaryClosingInfo;
use App\User_account;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClosingPosting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'closing:posting';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post the pending closing';

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

         $month_list = [];

         if($current_month > 7){

             $starting_time = $current_date->year."-08-01";
             $end_time = ($current_date->year + 1)."-01-31";

             array_push($month_list, $current_date->year."-08");
             array_push($month_list, $current_date->year."-09");
             array_push($month_list, $current_date->year."-10");
             array_push($month_list, $current_date->year."-11");
             array_push($month_list, $current_date->year."-12");
             array_push($month_list, ($current_date->year + 1)."-01");
         }
         else{

             $starting_time = $current_date->year."-02-01";
             $end_time = $current_date->year."-07-31";


             array_push($month_list, $current_date->year."-02");
             array_push($month_list, $current_date->year."-03");
             array_push($month_list, $current_date->year."-04");
             array_push($month_list, $current_date->year."-05");
             array_push($month_list, $current_date->year."-06");
             array_push($month_list, $current_date->year."-07");
         }




         /**
          *
          * closing information every month of closing
          *
          */


         $closing_info_instance = ClosingInfo::all();

         foreach ($closing_info_instance as $single_closing_info) {
             
             $last_closing_info = $single_closing_info;
         }
         
         
         foreach ($month_list as $single_month) {

             
             
             $sonchoy_aday = Sonchoy::where('info_type', 'sonchoy_masik_joma')
                                 ->where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('total_amount');

             $sonchoy_uttolon = Sonchoy::where('info_type', 'sonchoy_uttolon')
                                 ->where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('money_amount');

             $munafa_aday = Munafa::where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('amount');

             $munafa_theke_khoroch = Munafa_theke_khoroch::where('updated_at', 'LIKE', "%$single_month%")->sum('money_amount');


             $sheyar_aday = Sheyar::where('info_type', 'buy')
                                 ->where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('sheyar_amount');


             $sheyar_bikroy = Sheyar::where('info_type', 'sell')
                                 ->where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('sheyar_amount');


             $reserve_aday = Reserve::where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('money_amount');


             $reserve_theke_khoroch = Reserve::where('info_type', 'spent')
                                 ->where('updated_at', 'LIKE', "%$single_month%")
                                 ->sum('money_amount');


             $vobon_theke_aday = Reserve::where('info_type', 'vobon_theke_aday')
                                     ->where('updated_at', 'LIKE', "%$single_month%")
                                     ->sum('money_amount');

             $vobon_theke_khoroch = Reserve::where('info_type', 'vobon_theke_khoroch')
                                     ->where('updated_at', 'LIKE', "%$single_month%")
                                     ->sum('money_amount');

             $mrrittukalin_unudan = Reserve::where('info_type', 'mrrittukalin_unudan')
                                     ->where('updated_at', 'LIKE', "%$single_month%")
                                     ->sum('money_amount');


             $rin_aday = Loan::where('info_type', 'loan_joma')
                                     ->where('updated_at', 'LIKE', "%$single_month%")
                                     ->sum('money_amount');


             $rin_prodan = Loan::where('info_type', 'loan_bitoron')
                                     ->where('updated_at', 'LIKE', "%$single_month%")
                                     ->sum('money_amount');


             $month_net_aday = $sonchoy_aday + $munafa_aday + $sheyar_aday + $reserve_aday + $rin_aday - $mrrittukalin_unudan;

             $month_net_khoroch = $sonchoy_uttolon + $reserve_theke_khoroch + $vobon_theke_khoroch + $mrrittukalin_unudan + $rin_prodan;


             $closing_info_instance = new ClosingInfo;

             $closing_info_instance->closing_date = $end_time;
             $closing_info_instance->month_info = $single_month;
             $closing_info_instance->sonchoy_aday = $sonchoy_aday;
             $closing_info_instance->munafa_aday = $munafa_aday;
             $closing_info_instance->sheyar_aday = $sheyar_aday;
             $closing_info_instance->reserve_aday = $reserve_aday;
             $closing_info_instance->vobon_theke_aday = $vobon_theke_aday;
             $closing_info_instance->rin_aday = $rin_aday;
             $closing_info_instance->mot_aday = $month_net_aday;
             $closing_info_instance->sonchoy_ferot = $sonchoy_uttolon;
             $closing_info_instance->bibidh_khoroch = $reserve_theke_khoroch;
             $closing_info_instance->vobon = $vobon_theke_khoroch;
             $closing_info_instance->mrrittukalin_onudan = $mrrittukalin_unudan;
             $closing_info_instance->rin_prodan = $rin_prodan;
             $closing_info_instance->mot_khoroch = $month_net_khoroch;

             $closing_info_instance->save();


         }



         /**
          *
          * closing information ( 6 months )
          *
          */



         

         $sonchoy_aday = Sonchoy::where('info_type', 'sonchoy_masik_joma')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('total_amount');

         $sonchoy_aday += $last_closing_info->sonchoy_aday;

         $sonchoy_uttolon = Sonchoy::where('info_type', 'sonchoy_uttolon')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         $closing_net_sonchoy = $sonchoy_aday - $sonchoy_uttolon;



         $munafa_aday = Munafa::whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('amount');

         $munafa_theke_khoroch = Munafa_theke_khoroch::whereDate('updated_at', '>=', $starting_time)->whereDate('updated_at', '<=', $end_time)
                             ->sum('money_amount');

         $closing_net_munafa = $munafa_aday - $munafa_theke_khoroch;



         $sheyar_aday = Sheyar::where('info_type', 'buy')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('sheyar_amount');

         $sheyar_aday += $last_closing_info->sheyar_aday;


         $sheyar_bikroy = Sheyar::where('info_type', 'sell')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('sheyar_amount');


         $closing_net_sheyar = $sheyar_aday - $sheyar_bikroy;



         $reserve_aday = Reserve::whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         

         $reserve_aday += $last_closing_info->reserve_aday;

         $reserve_theke_khoroch = Reserve::where('info_type', 'spent')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');



         $vobon_theke_aday = Reserve::where('info_type', 'vobon_theke_aday')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         $vobon_theke_khoroch = Reserve::where('info_type', 'vobon_theke_khoroch')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         $mrrittukalin_unudan = Reserve::where('info_type', 'mrrittukalin_unudan')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         $closing_net_reserve = $reserve_aday - $reserve_theke_khoroch - $mrrittukalin_unudan;


         $rin_aday = Loan::where('info_type', 'loan_joma')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');


         $rin_prodan = Loan::where('info_type', 'loan_bitoron')
                                 ->whereDate('updated_at', '>=', $starting_time)
                                 ->whereDate('updated_at', '<=', $end_time)
                                 ->sum('money_amount');

         $rin_prodan += $last_closing_info->rin_prodan;

         $closing_net_loan = $rin_aday - $rin_prodan;




         $closing_net_aday = $sonchoy_aday + $munafa_aday + $sheyar_aday + $reserve_aday + $rin_aday - $mrrittukalin_unudan;

         $closing_net_khoroch = $sonchoy_uttolon + $reserve_theke_khoroch + $vobon_theke_khoroch + $mrrittukalin_unudan + $rin_prodan;

         // dd($munafa_aday - $munafa_theke_khoroch);

         $actual_percentage = ( ($munafa_aday - $munafa_theke_khoroch) / ($closing_net_sonchoy + $closing_net_sheyar) ) * 100;



        $temporary_closing_info_instance = TemporaryClosingInfo::all();

         foreach ($temporary_closing_info_instance as $single_closing_info) {
             
             $temporary_last_closing_info = $single_closing_info;
         }


         $final_percentage = $temporary_last_closing_info->percentage;


         /**
          *
          * calculate the money need to give this percentage 
          *
          */
         
         $net_money = 0;

         $user_account_instance = User_account::all();

         foreach ($user_account_instance as $single_account) {
             
             $user_sheyar = $single_account->sheyar * 100;
             $user_sonchoy = $single_account->net_sonchoy;

             $user_net_money = $user_sheyar + $user_sonchoy;

             $temp_money = floor(($user_net_money * $final_percentage) / 100);

             $net_money += $temp_money;
         }

         


         if($net_money >= $closing_net_munafa){

             $reserve_condition = "money need";

             $money_taken_or_given_to_reserve = $net_money - $closing_net_munafa;
         }
         else{

             $reserve_condition = "money extra";

             $money_taken_or_given_to_reserve = $closing_net_munafa - $net_money;
         }



         // $reserve_condition = $temporary_last_closing_info->reserve_condition;

         // $money_taken_or_given_to_reserve = $temporary_last_closing_info->money_taken_or_given_to_reserve;




         $closing_info_instance = new ClosingInfo;

         $closing_info_instance->closing_date = $end_time;
         $closing_info_instance->month_info = "final_info";
         $closing_info_instance->sonchoy_aday = $closing_net_sonchoy;
         $closing_info_instance->munafa_aday = $closing_net_munafa;
         $closing_info_instance->sheyar_aday = $sheyar_aday;
         $closing_info_instance->reserve_aday = $closing_net_reserve;
         $closing_info_instance->vobon_theke_aday = $vobon_theke_aday;
         $closing_info_instance->rin_aday = $rin_aday;
         $closing_info_instance->mot_aday = $closing_net_aday;
         $closing_info_instance->sonchoy_ferot = $sonchoy_uttolon;
         $closing_info_instance->bibidh_khoroch = $reserve_theke_khoroch;
         $closing_info_instance->vobon = $vobon_theke_khoroch;
         $closing_info_instance->mrrittukalin_onudan = $mrrittukalin_unudan;
         $closing_info_instance->rin_prodan = $rin_prodan;
         $closing_info_instance->mot_khoroch = $closing_net_khoroch;
         $closing_info_instance->actual_percentage = $actual_percentage;
         $closing_info_instance->final_percentage = $final_percentage;
         $closing_info_instance->reserve_condition = $reserve_condition;
         $closing_info_instance->money_taken_or_given_amount_to_reserve = $money_taken_or_given_to_reserve;

         $closing_info_instance->save();



         /**
          *
          * give the user their money (sheyar munafa + sonchoy munafa )
          *
          */
         


         $user_account_instance = User_account::all();

         foreach ($user_account_instance as $single_account) {

            /* sheyar munafa */
            
            $sonchoy_instance = new Sonchoy;
             
            $user_sheyar = $single_account->sheyar * 100;
            $sheyar_munafa = floor(($user_sheyar * $percentage) / 100);

            $sonchoy_instance->user_id = $single_account->user_id;
            $sonchoy_instance->info_type = "sheyar_munafa";
            $sonchoy_instance->money_amount = $sheyar_munafa;
            $sonchoy_instance->current_month_sonchoy = $single_account->net_sonchoy + $sheyar_munafa;

            $sonchoy_instance->save();


            /* sonchoy munafa */

            $sonchoy_instance = new Sonchoy;
            
            $user_sonchoy = $single_account->net_sonchoy;
            $sonchoy_munafa = floor(($user_sonchoy * $percentage) / 100);

            $sonchoy_instance->user_id = $single_account->user_id;
            $sonchoy_instance->info_type = "sonchoy_munafa";
            $sonchoy_instance->money_amount = $sheyar_munafa;
            $sonchoy_instance->current_month_sonchoy = $single_account->net_sonchoy + $sonchoy_munafa + $sheyar_munafa;

            $sonchoy_instance->save();


            $single_account->net_sonchoy = $single_account->net_sonchoy + $sheyar_munafa + $sonchoy_munafa;

            $single_account->save();
         }


    }
}
