@extends('layouts.jotbazar')

@section('hirizontal_nav_report_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">

      <a href="{{ route('company.daily_report') }}" class="list-group-item">ডেইলি রিপোর্ট</a>
      <a href="{{ route('company.monthly_report') }}" class="list-group-item">মাসিক রিপোর্ট</a>
      <a href="{{ route('company.closing_report') }}" class="list-group-item active">ক্লোজিং রিপোর্ট </a>
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />








        









        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.closing_report_info') }}">

        	{{ csrf_field() }}

              <div class="row">
                
                <div class="col-sm-5 col-md-5 col-xl-6">
                  
                  <div id="month_for_monthly_report" class="form-group">
                    <label for="month_for_monthly_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                      ভাগ  
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      {{-- <input name="month_for_monthly_report_input" id="month_for_monthly_report_input" class="form-control col-md-7 col-xs-12"  type="date" required> --}}

                      <select id='half' name="half"  class="form-control col-md-7 col-xs-12">
                          <option value=''>--Select Month--</option>
                          <option style="font-size: 20px;" value='1'>Janaury</option>
                          <option style="font-size: 20px;" value='2'>Jully</option>
                          
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

              {{-- <div id="date_for_closing_report" class="form-group">
                <label for="date_for_closing_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  বছর 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_for_closing_report_input" id="date_for_closing_report_input" class="form-control col-md-7 col-xs-12"  type="date" required>
                </div>
              </div> --}}

              


              


            {{-- <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">
              	
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                
              	<button type="submit" class="btn btn-success pull-right">Submit</button>

				  	{{-- <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button> --}}

             {{--  </div>
            </div> --}} 
        </form>
      </div>
    </div>




    <!-- masik report info -->


      @if ($closing_info_instance != null)
        

          {{-- <div class="row" style="position: ;background-color: #27ae60; color: white;font-size: 21px;">
            
            <div class="col-sm-1 col-md-1 col-xl-1">
              তারিখ
            </div>
            <div class="col-sm-1 col-md-1 col-xl-1">
              সঞ্চয় আদায়
            </div>

            <div class="col-sm-5 col-md-5 col-xl-5">

              <div class="row">

                <div class="col-sm-2 col-md-2 col-xl-2">
                  মুনাফা আদায়
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  শেয়ার আদায়
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  রিজার্ভ আদায়
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  ভবন থেকে আদায়
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  ঋণ আদায়
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  মোট আদায়
                </div>

              </div>



            </div>

            <div class="col-sm-5 col-md-5 col-xl-5">

              <div class="row">

                <div class="col-sm-2 col-md-2 col-xl-2">
                  সঞ্চয় ফেরত
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  বিবিধ খরচ
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  ভবন
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2" style="text-align: center;">
                  মৃত্যুকালীন অনুদান
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2" style="text-align: center;">
                  ঋণ প্রাদান
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2">
                  মোট খরচ
                </div>

              </div>
              
            </div>

            

          </div><hr>


          <div style="text-align: center;font-size: 20px;height: 600px;overflow-y: auto;">

          
          @foreach ($closing_info_instance as $single_info)
            

            <div class="row">


              <div class="col-sm-1 col-md-1 col-xl-1">
                @if ($single_info->month_info == "final_info")
                   
                   {{ "৬ মাসের হিসাব" }}

                  @else

                    {{ $single_info->month_info }}

                 @endif
              </div>
              <div class="col-sm-1 col-md-1 col-xl-1">
                {{ $single_info->sonchoy_aday }}
              </div>

              <div class="col-sm-5 col-md-5 col-xl-5">

                <div class="row">

                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->munafa_aday }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->sheyar_aday }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->reserve_aday }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->vobon_theke_aday }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->rin_aday }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->mot_aday }}
                  </div>

                </div>



              </div>

              <div class="col-sm-5 col-md-5 col-xl-5">

                <div class="row">

                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->sonchoy_ferot }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->bibidh_khoroch }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->vobon }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2" style="text-align: center;">
                    {{ $single_info->mrrittukalin_onudan }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2" style="text-align: center;">
                    {{ $single_info->rin_prodan }}
                  </div>
                  <div class="col-sm-2 col-md-2 col-xl-2">
                    {{ $single_info->mot_khoroch }}
                  </div>

                </div>
                
              </div>
              
              

            </div><hr>

          @endforeach

        </div> --}}

        <div class="row">


          
          @foreach ($closing_info_instance as $single_info)


            @if ($single_info->month_info == "final_info")

              <br><br>


              <div id="closing_net_sheyar" class="col-sm-offset-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট শেয়ারের পরিমান 
                </label>
                <div id="closing_net_sheyar_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $single_info->sheyar_aday }}
                </div>
              </div><br><br>
 
               <div id="closing_net_sonchoy" class="col-sm-offset-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট সঞ্চয়ের পরিমান
                </label>
                <div id="closing_net_sonchoy_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $single_info->sonchoy_aday }}
                </div>
              </div><br><br>

              <div id="closing_net_munafa" class="col-sm-offset-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট রিজার্ভ পরিমান
                </label>
                <div id="closing_net_munafa_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $single_info->reserve_aday + $single_info->vobon_theke_aday - $single_info->mrrittukalin_onudan }}
                </div>
              </div><br><br>


              <div id="closing_net_munafa" class="col-sm-offset-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট মুনাফার পরিমান
                </label>
                <div id="closing_net_munafa_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $single_info->munafa_aday }}
                </div>
              </div><br><br>


              <div id="closing_money_taken_from_reserve" class="col-sm-offset-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট আদায় 
                </label>
                <div id="closing_money_taken_from_reserve_info" class="col-md-6 col-sm-6 col-xs-12">
                  
                    
                    {{ $single_info->reserve_aday + $single_info->vobon_theke_aday - $single_info->mrrittukalin_onudan + $single_info->sheyar_aday + $single_info->sonchoy_aday + $single_info->munafa_aday }}

                  
                </div>
              </div><br><br>
 



              


              <div id="closing_percentage" class="col-sm-offset-3">
                <label for="closing_percentage_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  লাভের পার্সেন্টেজ 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ $single_info->final_percentage }}
                </div>
              </div><br><br> 

            @endif
            

          

            
          @endforeach


        </div>







         <div id="closing_report" class="table-responsive" style="margin-top: 20px;overflow-y: auto;">
           <table class="table table-hover table-striped fixed_table_header table-bordered"> 

            
             <thead>
                  <tr>
                    <th style="text-align: center; font-size: 22px;">তারিখ</th>
                    <th style="text-align: center; font-size: 22px;">সঞ্চয় আদায়</th>
                    <th style="text-align: center; font-size: 22px;">মুনাফা আদায়</th>
                    <th style="text-align: center; font-size: 22px;">শেয়ার আদায়</th>
                    <th style="text-align: center; font-size: 22px;">রিজার্ভ আদায়</th>
                    <th style="text-align: center; font-size: 22px;">ভবন থেকে আদায়</th>
                    <th style="text-align: center; font-size: 22px;">ঋণ আদায় </th>
                    <th style="text-align: center; font-size: 22px;">মোট আদায়</th>
                    <th style="text-align: center; font-size: 22px;">সঞ্চয় ফেরত</th>
                    <th style="text-align: center; font-size: 22px;">বিবিধ খরচ</th>
                    <th style="text-align: center; font-size: 22px;">ভবন</th>
                    <th style="text-align: center; font-size: 22px;">মৃত্যুকালীন অনুদান</th>
                    <th style="text-align: center; font-size: 22px;">ঋণ প্রাদান</th>
                    <th style="text-align: center; font-size: 22px;">মোট খরচ</th>
                  </tr>
            </thead>
                <tbody style=" font-size: 22px;">
                  
                    @foreach ($closing_info_instance as $single_info)  
                    

                      <tr>
                        
                          <td>
                            @if ($single_info->month_info == "final_info")
                               
                              {{ "৬ মাসের হিসাব" }}

                            @else

                              {{ $single_info->month_info }}

                            @endif
                          </td>
                          <td>{{ $single_info->sonchoy_aday }}</td>
                          <td>{{ $single_info->munafa_aday }}</td>
                          <td>{{ $single_info->sheyar_aday }}</td>
                          <td>{{ $single_info->reserve_aday }}</td>
                          <td>{{ $single_info->vobon_theke_aday }}</td>
                          <td>{{ $single_info->rin_aday }}</td>
                          <td>{{ $single_info->mot_aday }}</td>
                          <td>{{ $single_info->sonchoy_ferot }}</td>
                          <td>{{ $single_info->bibidh_khoroch }}</td>
                          <td>{{ $single_info->vobon }}</td>
                          <td>{{ $single_info->mrrittukalin_onudan }}</td>
                          <td>{{ $single_info->rin_prodan }}</td>
                          <td>{{ $single_info->mot_khoroch }}</td>
                          

                      </tr>
                      
                    

                    @endforeach
                    
                  
                  
                </tbody>

          </table>
        </div><br><br>

        <div class="col-sm-offset-3 col-sm-5" style="font-size: 20px;">

          <button type="" id="closing_report_print_button" class="btn btn-success">প্রিন্ট করুন </button>
          
        </div> <br><br><br><br>






      @endif

          




      
      
    
    
	        

@endsection