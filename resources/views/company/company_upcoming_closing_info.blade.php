@extends('layouts.jotbazar')

@section('hirizontal_nav_closing_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	

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

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.upcoming_update_percentage') }}">

        	{{ csrf_field() }}

              <div id="closing_net_sheyar" class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট শেয়ারের পরিমান 
                </label>
                <div id="closing_net_sheyar_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $closing_info->total_sheyar }}
                </div>
              </div>

              <div id="closing_net_sonchoy" class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট সঞ্চয়ের পরিমান
                </label>
                <div id="closing_net_sonchoy_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $closing_info->total_sonchoy }}
                </div>
              </div>

              <div id="closing_net_munafa" class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোট মুনাফার পরিমান
                </label>
                <div id="closing_net_munafa_info" class="col-md-6 col-sm-6 col-xs-12">
                  {{ $closing_info->munafa_theke_income - $closing_info->munafa_theke_spend }}
                </div>
              </div>

              <div id="closing_money_taken_from_reserve" class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  রিজার্ভ থেকে গ্রহন
                </label>
                <div id="closing_money_taken_from_reserve_info" class="col-md-6 col-sm-6 col-xs-12">
                  @if ($status == "money need")
                    
                    {{ $money_amount }}

                  @endif
                </div>
              </div>

              <div id="closing_money_given_to_reserve" class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  রিজার্ভে জমা 
                </label>
                <div id="closing_money_given_to_reserve_info" class="col-md-6 col-sm-6 col-xs-12">
                  @if ($status == "money extra")
                    
                    {{ $money_amount }}

                  @endif
                </div>
              </div>


              <div id="closing_percentage" class="form-group">
                <label for="closing_percentage_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	লাভের পার্সেন্টেজ 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="closing_percentage_input" id="closing_percentage_input" class="form-control col-md-7 col-xs-12"  type="number" value="{{ $closing_info->percentage }}">
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




    <!-- rin khelapi info -->

    
      
    <div class="table-responsive" style="margin-top: 20px;">
      <table class="table table-hover table-striped">
        
        <thead>
              <tr>
                <th style="text-align: center; font-size: 22px;">নাম</th>
                <th style="text-align: center; font-size: 22px;">সদস্য নম্বর</th>
                <th style="text-align: center; font-size: 22px;">পদক্ষেপ </th>
                
              </tr>
        </thead>
            <tbody style="text-align: center; font-size: 22px;">
              @foreach ($closing_info->ListOfRinKhelapi as $single_rin_khelapi)
                

                <tr id="rin_khelapi_info_".{{ $single_rin_khelapi->id }}>
                  
                  <td>{{ $single_rin_khelapi->UserBasicInfo->name }}</td>
                  <td>{{ $single_rin_khelapi->user_id }}</td>
                  <td><a href="{{ route('company.remove_rin_khelapi', ['id' =>  $single_rin_khelapi->id]) }}">
                    <button class="btn btn-danger delete_button">বাতিল করুন </button>
                      </a> 
                  </td>
                </tr>
                
              @endforeach
              
            </tbody>

      </table>
    </div>

    {{-- <div class="pull-right" style="font-size: 20px;">

      {{ $closing_info->links() }}
      
    </div> --}}
      
    

    
	        

@endsection