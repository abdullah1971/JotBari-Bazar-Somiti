<?php

namespace App\Http\Controllers;

use App\ClosingInfo;
use App\Daily_entry;
use App\Loan;
use App\Munafa;
use App\Munafa_theke_khoroch;
use App\Reserve;
use App\Sheyar;
use App\Sonchoy;
use App\TemporaryClosingInfo;
use App\TemporaryRinKhelapiInfo;
use App\User_account;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

	// protected $fromYear, $toYear, $fromMonth, $toMonth, $fromDay, $toDay;
    


    /**
     *
     * daily report
     *
     */
    
    public function DailyReport($from = null, $to = null)
    {

      // return $from;

    	if($from == null && $to == null)
    		$daily_info = null;
    	else
    		$daily_info = Daily_entry::whereDate('updated_at', '>=', $from)
    							->whereDate('updated_at', '<=', $to)->paginate(15);




       //  $current_time = Carbon::now();

       //  if ($current_time->month >= 2 && $current_time->month <= 7) {
            
       //      // $time = "abc";
       //      $starting_date = $current_time->year."-02-01";
       //      $end_date = $current_time->year."-07-31";
       //  }
       //  else{

       //      // $time = "def";
       //      $starting_date = $current_time->year."-08-01";
       //      $end_date = ($current_time->year + 1 )."-01-31";
       //  }

       //  $sonchoy_instance = Sonchoy::where('user_id', 1)
       //                              ->where('info_type', 'sonchoy_masik_joma')
       //                              ->whereDate('updated_at', '>=', $starting_date)
       //                              ->whereDate('updated_at', '<=', $end_date)
       //                              ->get();


       //  $loan_taking_instance = Loan::where('user_id', 1)
       //                              ->where('info_type', 'loan_bitoron')
       //                              ->whereDate('updated_at', '>=', $starting_date)
       //                              ->whereDate('updated_at', '<=', $end_date)
       //                              ->get();


       // /**
       //  *
       //  * sonchoy masik joma info
       //  *
       //  */
       

       // $sonchoy_masik_munafa_table = '<table class="table table-hover table-striped">
                   
       //                     <thead>
       //                           <tr>
       //                             <th style="text-align: center;">মাসিক জমা</th>
       //                             <th style="text-align: center;">জরিমানা</th>
       //                             <th style="text-align: center;">মোট জমা</th>
       //                             <th style="text-align: center;">তারিখ </th>
       //                           </tr>
       //                     </thead>
       //                         <tbody style="text-align: center; font-size: 22px;">';


       // $temp_sonchoy_masik_munafa_table_info = "";

       // foreach ($sonchoy_instance as $single_sonchoy) {
           
       //     $tempDate = $single_sonchoy->updated_at->formatLocalized('%A %d %B %Y');
           
       //     $temp = "<tr>
       //                 <td>$single_sonchoy->money_amount</td>
       //                 <td>$single_sonchoy->jorimana_amount</td>
       //                 <td>$single_sonchoy->total_amount</td>
       //                 <td>$tempDate</td>                                    
       //             </tr>  ";

       //     $temp_sonchoy_masik_munafa_table_info = $temp_sonchoy_masik_munafa_table_info.$temp;
       // }
                  
       // $sonchoy_masik_munafa_table = $sonchoy_masik_munafa_table.$temp_sonchoy_masik_munafa_table_info.'</tbody>

       //                 </table>';

       //  return $sonchoy_masik_munafa_table;



    	return view('company.company_daily_report', compact('daily_info'));
    }


    /**
     *
     * daily report with date
     *
     */
    
    public function DailyReportInfo(Request $request, $from = null, $to = null)
    {
    	
    	$from_date = $request->from_day_for_daily_report_input;
    	$to_date = $request->to_day_for_daily_report_input;


      if($request->from_day_for_daily_report_input == null){

        $from_date = $request->today_date;
        $to_date = $request->today_date;
      }

    	// return $request->all();

    	return redirect()->route('company.daily_report', ['from' => $from_date, 'to' => $to_date]);
    }




    /**
     *
     * monthly report
     *
     */
    
    public function MonthlyReport($time = null)
    {


        $sonchoy_aday = [];
        $munafa_aday = [];
        $sheyar_aday = [];
        $reserve_aday = [];
        $vobon_theke_aday = [];
        $rin_aday = [];
        $mot_aday = [];
        $sonchoy_uttolon = [];
        $reserve_bay = [];
        $rin_prodan = [];
        $mot_bay = [];


        

        if ($time != null) {
            

            $month = $time[5].$time[6];

            if($month == "01" || $month == "03"|| $month == "05"|| $month == "07"|| $month == "08"|| $month == "10"|| $month == "12"){

                // return "31";
                $end_date = 31;
                // $date = $time."-$end_date";
            }
            else if($month == "04" || $month == "06"|| $month == "09"|| $month == "11"){

                // return "30";
                $end_date = 30;
                // $date = $time."-$end_date";
            }
            else if($month == "02"){

                /* if get time check the leap year */
                
                // return "28";
                $end_date = 28;
                // $date = $time."-$end_date";
            }

            for ($i = 1; $i <= $end_date; $i++) { 

                if($i>9)
                    $date = $time."-$i";
                else
                    $date = $time."-0$i";
                
                /* sonchoy aday */
                $temp_sonchoy_aday = Sonchoy::where('info_type', 'sonchoy_masik_joma')->where('updated_at', 'LIKE', "%$date%")->sum('total_amount');
                array_push($sonchoy_aday, $temp_sonchoy_aday);

                // dd($date);

                /* munafa aday */
                $temp_munafa_aday = Munafa::where('updated_at', 'LIKE', "%$date%")->sum('amount');
                array_push($munafa_aday, $temp_munafa_aday);

                /* sheyar aday */
                $temp_sheyar_aday = Sheyar::where('info_type', 'buy')->where('updated_at', 'LIKE', "%$date%")->sum('sheyar_amount');
                array_push($sheyar_aday, $temp_sheyar_aday);

                /* reserve aday */
                $temp_reserve_aday = Reserve::where('info_type', 'income')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                $temp_reserve_aday += Reserve::where('info_type', 'sonchoy_masik_jorimana')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($reserve_aday, $temp_reserve_aday);

                /* vobon theke aday */
                $temp_vobon_theke_aday = Reserve::where('info_type', 'vobon_theke_income')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($vobon_theke_aday, $temp_vobon_theke_aday);

                /* rin aday */       
                $temp_rin_aday = Loan::where('info_type', 'loan_joma')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($rin_aday, $temp_rin_aday);

                /* mot aday */
                $temp_mot_aday = $temp_sonchoy_aday + $temp_munafa_aday + $temp_sheyar_aday + $temp_reserve_aday + $temp_vobon_theke_aday + $temp_rin_aday;
                array_push($mot_aday, $temp_mot_aday);

                // dd($temp_reserve_aday);


                /* bank joma */
                


                /* sonchoy uttolon */
                $temp_sonchoy_uttolon = Sonchoy::where('info_type', 'sonchoy_uttolon')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($sonchoy_uttolon, $temp_sonchoy_uttolon);

                /* reserve bay */
                $temp_reserve_bay = Reserve::where('info_type', 'spent')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($reserve_bay, $temp_reserve_bay);

                /* rin prodan */
                $temp_rin_prodan = Loan::where('info_type', 'loan_bitoron')->where('updated_at', 'LIKE', "%$date%")->sum('money_amount');
                array_push($rin_prodan, $temp_rin_prodan);

                /* mot bay */
                $temp_mot_bay = $temp_sonchoy_uttolon + $temp_reserve_bay + $temp_rin_prodan;
                array_push($mot_bay, $temp_mot_bay);

            }
            
        }


        



        // dd($mot_bay);
        // dd($rin_prodan);


        
        // /* sonchoy aday */
        // $sonchoy_aday = Sonchoy::where('info_type', 'sonchoy_masik_joma')->where('updated_at', 'LIKE', "%$time%")->sum('total_amount');

        // /* munafa aday */
        // $munafa_aday = Munafa::where('updated_at', 'LIKE', "%$time%")->sum('amount');

        // /* sheyar aday */
        // $sheyar_aday = Sheyar::where('info_type', 'buy')->where('updated_at', 'LIKE', "%$time%")->sum('sheyar_amount');

        // /* reserve aday */
        // $reserve_aday = Reserve::where('info_type', 'income')->orWhere('info_type', 'sonchoy_masik_jorimana')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* vobon theke aday */
        // $vobon_theke_aday = Reserve::where('info_type', 'vobon_theke_income')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* rin aday */       
        // $rin_aday = Loan::where('info_type', 'loan_joma')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* mot aday */
        // $mot_aday = $sonchoy_aday + $munafa_aday + $sheyar_aday + $reserve_aday + $vobon_theke_aday + $rin_aday;




        // /* bank joma */
        


        // /* sonchoy uttolon */
        // $sonchoy_uttolon = Sonchoy::where('info_type', 'sonchoy_uttolon')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* reserve bay */
        // $reserve_bay = Reserve::where('info_type', 'spent')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* rin prodan */
        // $rin_prodan = Loan::where('info_type', 'loan_bitoron')->where('updated_at', 'LIKE', "%$time%")->sum('money_amount');

        // /* mot bay */
        // $mot_bay = $sonchoy_uttolon + $reserve_bay + $rin_prodan;






        return view('company.company_masik_report', compact('sonchoy_aday', 'munafa_aday', 'sheyar_aday', 'reserve_aday', 'vobon_theke_aday', 'rin_aday', 'mot_aday', 'sonchoy_uttolon', 'reserve_bay', 'rin_prodan', 'mot_bay', 'end_date', 'time'));
    }



    /**
     *
     * monthly report info
     *
     */
    
    public function MonthlyReportInfo(Request $request, $time = null)
    {
        
        // $time = $request->month_for_monthly_report_input;

        // return $time->month;

        // $time_part = explode('-', $time);

        $month_with_year = $request->year."-".$request->month;

        return redirect()->route('company.monthly_report', ['time' => $month_with_year]);
    }



    /**
     *
     * closing report
     *
     */
    
    public function ClosingReport($time = null)
    {
        
        $closing_info_instance = ClosingInfo::whereDate('closing_date', $time)->get();

        return view('company.company_closing_report', compact('closing_info_instance'));
    }


    /**
     *
     * closing report info
     *
     */
    
    public function ClosingReportInfo(Request $request, $time = null)
    {

      if ($request->half == 1) {
        
        $time = $request->year."-01-31";

      }
      else{

        $time = $request->year."-07-31";
      }

      // return $time;

        
        return redirect()->route('company.closing_report', ['time' => $time]);
    }
}
