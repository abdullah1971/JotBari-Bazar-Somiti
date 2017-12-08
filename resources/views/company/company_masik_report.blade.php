@extends('layouts.jotbazar')

@section('hirizontal_nav_report_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">

      <a href="{{ route('company.daily_report') }}" class="list-group-item">ডেইলি রিপোর্ট</a>
      <a href="{{ route('company.monthly_report') }}" class="list-group-item active">মাসিক রিপোর্ট</a>
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

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.monthly_report_info') }}">

        	{{ csrf_field() }}


              <div class="row">
                
                <div class="col-sm-5 col-md-5 col-xl-6">
                  
                  <div id="month_for_monthly_report" class="form-group">
                    <label for="month_for_monthly_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                      মাস 
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      {{-- <input name="month_for_monthly_report_input" id="month_for_monthly_report_input" class="form-control col-md-7 col-xs-12"  type="date" required> --}}

                      <select id='month' name="month"  class="form-control col-md-7 col-xs-12">
                          <option value=''>--Select Month--</option>
                          <option style="font-size: 20px;" value='01'>Janaury</option>
                          <option style="font-size: 20px;" value='02'>February</option>
                          <option style="font-size: 20px;" value='03'>March</option>
                          <option style="font-size: 20px;" value='04'>April</option>
                          <option style="font-size: 20px;" value='05'>May</option>
                          <option style="font-size: 20px;" value='06'>June</option>
                          <option style="font-size: 20px;" value='07'>July</option>
                          <option style="font-size: 20px;" value='08'>August</option>
                          <option style="font-size: 20px;" value='09'>September</option>
                          <option style="font-size: 20px;" value='10'>October</option>
                          <option style="font-size: 20px;" value='11'>November</option>
                          <option style="font-size: 20px;" value='12'>December</option>
                          </select> 

                    </div>
                  </div>

                </div>

                <div class="col-sm-5 col-md-5 col-xl-6">
                  
                  <div id="year_for_monthly_report" class="form-group">
                    <label for="year_for_monthly_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                      বছর 
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      {{-- <input name="year_for_monthly_report_input" id="year_for_monthly_report_input" class="form-control col-md-7 col-xs-12"  type="date" required> --}}

                      @php
                        
                        $start_year = 1980;

                        $end_year = Carbon\Carbon::now()->year;

                      @endphp

                      <select id='year' name="year"  class="form-control col-md-7 col-xs-12">
                          <option value=''>--Select Year--</option>
                          @for ($i = $end_year; $i >= $start_year; $i--)
                            
                            <option style="font-size: 20px;" value="{{ $i }}">{{ $i }}</option>
                            
                          @endfor
                          
                          </select> 

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




    <!-- masik report info -->


      @if ($time != null)

{{--         <div id="masik_report">
          
        
        

          <div class="row" style="position: ;background-color: #27ae60; color: white;font-size: 21px;">
            
            <div class="col-sm-1 col-md-1 col-xl-1">
              তারিখ
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              সঞ্চয় আদায়
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              মুনাফা আদায়
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              শেয়ার আদায়
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              বিবিধ আদায়
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              ভবন আয়
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              ঋণ আদায় 
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              মোট আয় 
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              সঞ্চয় উত্তোলন 
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              বিবিধ ব্যয় 
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              ঋণ প্রদান 
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              মোট ব্যয়  
            </div>

          </div><hr>


          <div style="height: 600px;overflow-y: auto; text-align: center;font-size: 20px;">

          
          @for ($i = 0; $i < $end_date; $i++)


            @php
              $j = $i + 1;
            @endphp



            
            <div class="row">
              
              <div class="col-sm-1 col-md-1 col-xl-1">
                 @if($i>8)
                   {{ $date = $time."-$j" }}
                 @else
                   {{ $date = $time."-0$j" }}
                 @endif
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $sonchoy_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $munafa_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $sheyar_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $reserve_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $vobon_theke_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $rin_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $mot_aday[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $sonchoy_uttolon[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $reserve_bay[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $rin_prodan[$i] }}
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $mot_bay[$i] }}
              </div>

            </div><hr>

          @endfor
        </div>

      </div>

      @endif

          
      <div class="pull-left" style="font-size: 20px;">

        <button type="" id="masik_report_print_button" class="btn btn-success">প্রিন্ট করুন </button>
        
      </div> --}}



      
       <div id="masik_report" class="table-responsive" style="margin-top: 20px;overflow-y: auto;">
         <table class="table table-hover table-striped fixed_table_header table-bordered"> 

          
           <thead>
                <tr>
                  <th style="text-align: center; font-size: 22px;">তারিখ</th>
                  <th style="text-align: center; font-size: 22px;">সঞ্চয় আদায়</th>
                  <th style="text-align: center; font-size: 22px;">মুনাফা আদায়</th>
                  <th style="text-align: center; font-size: 22px;">শেয়ার আদায়</th>
                  <th style="text-align: center; font-size: 22px;">বিবিধ আদায়</th>
                  <th style="text-align: center; font-size: 22px;">ভবন আয়</th>
                  <th style="text-align: center; font-size: 22px;">ঋণ আদায় </th>
                  <th style="text-align: center; font-size: 22px;">মোট আয় </th>
                  <th style="text-align: center; font-size: 22px;">সঞ্চয় উত্তোলন </th>
                  <th style="text-align: center; font-size: 22px;">বিবিধ ব্যয় </th>
                  <th style="text-align: center; font-size: 22px;">ঋণ প্রদান </th>
                  <th style="text-align: center; font-size: 22px;">মোট ব্যয়  </th>
                </tr>
          </thead>
              <tbody style=" font-size: 22px;">
                
                  @for ($i = 0; $i < $end_date; $i++)
                    
                    @php
                      $j = $i + 1;
                    @endphp

                    <tr>
                      
                        <td>
                          @if($i>8)
                            {{ $date = $time."-$j" }}
                          @else
                           {{ $date = $time."-0$j" }}
                          @endif
                        </td>
                        <td>{{ $sonchoy_aday[$i] }}</td>
                        <td>{{ $munafa_aday[$i] }}</td>
                        <td>{{ $sheyar_aday[$i] }}</td>
                        <td>{{ $reserve_aday[$i] }}</td>
                        <td>{{ $vobon_theke_aday[$i] }}</td>
                        <td>{{ $rin_aday[$i] }}</td>
                        <td>{{ $mot_aday[$i] }}</td>
                        <td>{{ $sonchoy_uttolon[$i] }}</td>
                        <td>{{ $reserve_bay[$i] }}</td>
                        <td>{{ $rin_prodan[$i] }}</td>
                        <td>{{ $mot_bay[$i] }}</td>
                        

                    </tr>
                    
                  @endfor

                  
                
                
              </tbody>

        </table>
      </div>

      <div class="col-sm-offset-3 col-sm-5" style="font-size: 20px;">

        <button type="" id="masik_report_print_button" class="btn btn-success">প্রিন্ট করুন </button>
        
      </div> 

      {{-- <div class="pull-right" style="font-size: 20px;">

        {{ $daily_info->links() }}
        
      </div> --}}
      
    
    @endif
	        

@endsection