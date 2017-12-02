@extends('layouts.jotbazar')

@section('hirizontal_nav_loan_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('company.loan_biboron') }}" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company.loan_masik_munafa') }}" class="list-group-item">লোনের মাসিক মুনাফা</a>
		  <a href="{{ route('company.loan_giving_info') }}" class="list-group-item active">লোনের জামিনদারের তথ্য </a>
		  
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	    <div class="x_panel">
	      <div class="x_title">
	        <h2></h2>
	        
	        <div class="clearfix"></div>
	      </div>
	    <div>
	    <br />


	<form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.loan_giving_info_submit') }}">

        	{{ csrf_field() }}

              <div id="sovvo_sodosso_number" class="form-group">
                <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="text" required>
                </div>
              </div>


              <div id="jamindar_ovivabok_name" class="form-group">
                <label for="jamindar_ovivabok_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	জামিনদার (অভিভাবক) নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jamindar_ovivabok_name_input" id="jamindar_ovivabok_name_input" class="form-control col-md-7 col-xs-12"  type="text" required>
                </div>
              </div>

              <div id="jamindar_ovivabok_father_name" class="form-group">
                <label for="jamindar_ovivabok_father_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	জামিনদার (অভিভাবক) পিতার নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jamindar_ovivabok_father_name_input" id="jamindar_ovivabok_father_name_input" class="form-control col-md-7 col-xs-12"  type="text" required>
                </div>
              </div>

              <div id="jamindar_ovivabok_address" class="form-group">
                <label for="jamindar_ovivabok_address_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	জামিনদার (অভিভাবক) ঠিকানা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jamindar_ovivabok_address_input" id="jamindar_ovivabok_address_input" class="form-control col-md-7 col-xs-12"  type="text" required>
                </div>
              </div>


              <div id="jamindar_ovivabok_mobile_no" class="form-group">
                <label for="jamindar_ovivabok_mobile_no_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	জামিনদার (অভিভাবক) মোবাইল নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jamindar_ovivabok_mobile_no_input" id="jamindar_ovivabok_mobile_no_input" class="form-control col-md-7 col-xs-12"  type="number" required>
                </div>
              </div>


              <div id="jamindar_sodosso_no" class="form-group">
                <label for="jamindar_sodosso_no_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	জামিনদার (সদস্য) নম্বর 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jamindar_sodosso_no_input" id="jamindar_sodosso_no_input" class="form-control col-md-7 col-xs-12"  type="number" required>
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

@endsection