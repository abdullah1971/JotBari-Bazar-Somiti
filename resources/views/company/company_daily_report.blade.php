@extends('layouts.jotbazar')

@section('hirizontal_nav_report_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">

      <a href="{{ route('company.daily_report') }}" class="list-group-item active">ডেইলি রিপোর্ট</a>
      <a href="{{ route('company.monthly_report') }}" class="list-group-item">মাসিক রিপোর্ট</a>
      <a href="{{ route('company.closing_report') }}" class="list-group-item">ক্লোজিং রিপোর্ট </a>
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2></h2><br>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.daily_report_info') }}">

        	{{ csrf_field() }}

            <div class="row">
              

              <div class="col-sm-2 col-md-2 col-xl-2">

                @php

                  $today = Carbon\Carbon::now();
                  // $today = Carbon::now();

                  $today_date_info = $today->year."-".$today->month."-".$today->day;

                @endphp

                <input type="hidden" name="today_date" value="{{ $today_date_info }}">
                
                <button class="btn btn-success" type="">আজকের রিপোর্ট </button>

              </div>


              <div class="col-sm-4 col-md-4 col-xl-4">

                <div id="from_day_for_daily_report" class="form-group">
                  <label for="from_day_for_daily_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                    যে তারিখ থেকে
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input name="from_day_for_daily_report_input" id="from_day_for_daily_report_input" class="form-control col-md-7 col-xs-12"  type="date" >
                  </div>
                </div>

              </div>

              <div class="col-sm-4 col-md-4 col-xl-4">
                
                <div id="to_day_for_daily_report" class="form-group">
                  <label for="to_day_for_daily_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                    যে তারিখ পর্যন্ত 
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input name="to_day_for_daily_report_input" id="to_day_for_daily_report_input" class="form-control col-md-7 col-xs-12"  type="date" >
                  </div>
                </div>

              </div>

              <div class="col-sm-2 col-md-2 col-xl-2">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                      
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <button type="submit" class="btn btn-success pull-right">Submit</button>

                  {{-- <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button> --}}

                    </div>
                  </div>

              </div>

              

            </div>

              

              


              


            
        </form>
      </div>
    </div>




    <!-- sheyar info -->

    @if ($daily_info != null)
      
      <div id="daily_report_table" class="table-responsive" style="margin-top: 20px;">
        <table class="table table-hover table-striped table-bordered">
          
          <thead>
                <tr>
                  <th style="text-align: center; font-size: 22px;">সদস্য নম্বর</th>
                  <th style="text-align: center; font-size: 22px;">নাম</th>
                  <th style="text-align: center; font-size: 22px;">সঞ্চয়</th>
                  <th style="text-align: center; font-size: 22px;">মুনাফা</th>
                  <th style="text-align: center; font-size: 22px;">শেয়ার</th>
                  <th style="text-align: center; font-size: 22px;">রিজার্ভ</th>
                  <th style="text-align: center; font-size: 22px;">ঋণ </th>
                  <th style="text-align: center; font-size: 22px;">মুনাফা থেকে ব্যয় </th>
                  <th style="text-align: center; font-size: 22px;">মোট </th>
                  {{-- <th style="text-align: center; font-size: 22px;">বর্তমান লোন </th> --}}
                  <th style="text-align: center; font-size: 22px;">তারিখ </th>
                </tr>
          </thead>
              <tbody style="text-align: center; font-size: 22px;">
                @foreach ($daily_info as $single_info)
                  

                  <tr>
                    
                      @if ($single_info->entry_type == "sheyar_and_buy")


                          <td>{{ $single_info->Daily_entry_and_sheyar->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->UserBasicInfoKroy->name }}</td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->sheyar_amount }} <br> ( ক্রয়  )  </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->sheyar_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>
                        
                      @elseif($single_info->entry_type == "sheyar_and_sell")

                          
                          <td>{{ $single_info->Daily_entry_and_sheyar->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->UserBasicInfoKroy->name }}</td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->sheyar_amount }}<br> ( বিক্রয় )</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sheyar->sheyar_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "sonchoy_and_masik_joma")

                          
                          <td>{{ $single_info->Daily_entry_and_sonchoy->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->UserBasicInfo->name }}</td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->total_amount }}<br> ( মাসিক জমা )</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->total_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "sonchoy_and_uttolon")

                          
                          <td>{{ $single_info->Daily_entry_and_sonchoy->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->UserBasicInfo->name }}</td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->money_amount }}<br> ( উত্তোলন )</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_sonchoy->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "loan_and_bitoron")

                          
                          <td>{{ $single_info->Daily_entry_and_loan->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_loan->UserBasicInfo->name }}</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_loan->money_amount  }}<br> ( প্রদান ) </td>
                          <td></td>
                          {{-- <td></td> --}}
                          <td>{{ $single_info->Daily_entry_and_loan->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "loan_and_joma")

                          
                          <td>{{ $single_info->Daily_entry_and_loan->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_loan->UserBasicInfo->name }}</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_loan->money_amount }}<br> ( গ্রহন ) </td>
                          <td></td>
                          {{-- <td></td> --}}
                          <td>{{ $single_info->Daily_entry_and_loan->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "loan_and_masik_joma")

                          
                          <td>{{ $single_info->Daily_entry_and_loan->user_id }}</td>
                          <td>{{ $single_info->Daily_entry_and_loan->UserBasicInfo->name }}</td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_loan->total_amount }}</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_loan->total_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "reserve_and_income")

                          
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_reserve->money_amount }}<br> ( আয় ) </td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_reserve->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @elseif($single_info->entry_type == "reserve_and_spent")

                          
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_reserve->money_amount }}<br> ( ব্যয় )</td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_reserve->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>
                      @elseif($single_info->entry_type == "munafa_theke_khoroch")

                      
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>{{ $single_info->Daily_entry_and_munafa_theke_khoroch->money_amount  }}</td>
                          <td>{{ $single_info->Daily_entry_and_munafa_theke_khoroch->money_amount }}</td>
                          <td>{{ $single_info->updated_at->formatLocalized('%A %d %B %Y') }}</td>

                      @endif
                  </tr>
                  
                @endforeach
                
              </tbody>

        </table>
      </div>

      <div class="pull-left" style="font-size: 20px;">

        <button type="" id="daily_report_print_button" class="btn btn-success">প্রিন্ট করুন </button>
        
      </div>

      <div class="pull-right" style="font-size: 20px;">

        {{ $daily_info->links() }}
        
      </div>
      
    @endif

    
	        

@endsection














