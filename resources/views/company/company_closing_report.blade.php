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

              <div id="date_for_closing_report" class="form-group">
                <label for="date_for_closing_report_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  মাস 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_for_closing_report_input" id="date_for_closing_report_input" class="form-control col-md-7 col-xs-12"  type="date" required>
                </div>
              </div>

              


              


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">
              	
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                
              	<button type="submit" class="btn btn-success pull-right">Submit</button>

				  	{{-- <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button> --}}

              </div>
            </div>
        </form>
      </div>
    </div>




    <!-- masik report info -->


      @if ($closing_info_instance != null)
        

          <div class="row" style="position: ;background-color: #27ae60; color: white;font-size: 21px;">
            
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

        </div>

      @endif

          




      
      
    
    
	        

@endsection