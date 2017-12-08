@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
      <a href="{{ route('company_sodosso.home') }}" class="list-group-item">সদস্য বিবরন </a>
		  <a href="{{ route('company.sodosso_info_update_page') }}" class="list-group-item">সদস্য বিবরন হালনাগাদ </a>
		  <a href="{{ route('company.sodoss_sheyar_info') }}" class="list-group-item">শেয়ার বিবরন </a>
		  <a href="{{ route('company.sodosso_sonchoy_info') }}" class="list-group-item active">সঞ্চয় বিবরন </a>
      <a href="{{ route('company.sodosso__loan_info') }}" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company.sodosso_delete') }}" class="list-group-item">সদস্য বাতিল </a>
		  <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item">মাসিক সঞ্চয় নির্ধারন </a>
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

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.single_sodosso_sonchoy_info') }}">

        	{{ csrf_field() }}

              <div id="sovvo_sodosso_number" class="form-group">
                <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number" required>
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




    <!-- sheyar info -->

    @if (!$sonchoy_info->isEmpty())



      
      <div class="table-responsive" style="margin-top: 20px;">


        <div class="row">
          
          <div class="col-sm-offset-3 col-md-offset-3 col-xl-offset-3 col-sm-3 col-md-3 col-xl-3" style="font-size: 20px;">
            সদস্য নম্বর 
          </div>

          <div class="col-sm-6 col-md-6 col-xl-6" style="font-size: 20px;">
            {{ $sonchoy_info[0]->UserBasicInfo->membership_no }}
          </div>

        </div><br><br>

        
        <div class="row">
          
          <div class="col-sm-offset-3 col-md-offset-3 col-xl-offset-3 col-sm-3 col-md-3 col-xl-3" style="font-size: 20px;">
            নাম
          </div>

          <div class="col-sm-6 col-md-6 col-xl-6" style="font-size: 20px;">
            {{ $sonchoy_info[0]->UserBasicInfo->name }}
          </div>

        </div><br><br>




        <table class="table table-hover table-striped">
          
          <thead>
                <tr>
                  {{-- <th style="text-align: center; font-size: 22px;">সদস্য</th> --}}
                  <th style="text-align: center; font-size: 22px;">লেন-দেনের ধরন</th>
                  <th style="text-align: center; font-size: 22px;">জরিমানা</th>
                  <th style="text-align: center; font-size: 22px;">মোট প্রদেয়</th>
                  <th style="text-align: center; font-size: 22px;">বর্তমান সঞ্চয় </th>
                  <th style="text-align: center; font-size: 22px;">তারিখ </th>
                </tr>
          </thead>
              <tbody style="text-align: center; font-size: 22px;">
                @foreach ($sonchoy_info as $single_sonchoy)
                  

                  <tr>
                    {{-- <td>
                      
                      {{ $single_sonchoy->UserBasicInfo->name ." ( ". $single_sonchoy->UserBasicInfo->membership_no ." )" }}
                      
                    </td> --}}
                    <td>
                      @if ($single_sonchoy->info_type == "sonchoy_masik_joma")
                        
                        {{ "মাসিক জমা " }}

                      @elseif ($single_sonchoy->info_type == "sonchoy_uttolon")

                        {{ "উত্তোলন " }}

                      @elseif ($single_sonchoy->info_type == "sonchoy_munafa")

                        {{ "সঞ্চয়ের মুনাফা" }}

                      @elseif ($single_sonchoy->info_type == "sheyar_munafa")

                        {{ "শেয়ারের মুনাফা " }}
                      @endif
                    </td>
                    <td>{{ $single_sonchoy->jorimana_amount  }}</td>
                    <td>
                      @if ($single_sonchoy->info_type == "sonchoy_masik_joma")
                        
                        {{ $single_sonchoy->total_amount }}

                      @else

                        {{ $single_sonchoy->money_amount }}
                      @endif
                    </td>

                    <td>{{ $single_sonchoy->current_month_sonchoy }}</td>
                    <td>{{ $single_sonchoy->updated_at->formatLocalized('%A %d %B %Y') }}</td>
                  </tr>
                  
                @endforeach
                
              </tbody>

        </table>
      </div>

      <div class="pull-right" style="font-size: 20px;">

        {{ $sonchoy_info->links() }}
        
      </div>
      
    @endif

    
	        

@endsection