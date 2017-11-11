@extends('layouts.user')

@section('hirizontal_nav_sodoss_biboron_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">

		  <a href="{{ route('user.info_details') }}" class="list-group-item">সদস্য বিবরন </a>

		  <a href="{{ route('user.info_details_update') }}" class="list-group-item active">সদস্য বিবরন হালনাগাদ </a>
		 
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

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('user.info_details_update_store') }}" enctype="multipart/form-data">

        	{{ csrf_field() }}

              <!-- user name -->
              
              <div id="user_name" class="form-group">
                <label for="user_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name_input" id="user_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $user->name }}">
                </div>
              </div>



              <!-- user fathers name -->
              
              <div id="user_father_name" class="form-group">
                <label for="user_father_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  পিতার নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_father_name_input" id="user_father_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status == true ? $user_info_instance->user_father_name : "" }}">
                </div>
              </div>



              <!-- user mothers name -->
              
              <div id="user_mother_name" class="form-group">
                <label for="user_mother_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  মাতার নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_mother_name_input" id="user_mother_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status ? $user_info_instance->user_mother_name : "" }}">
                </div>
              </div>




              <!-- user husband or wife name -->
              
              <div id="user_husbandORwife_name" class="form-group">
                <label for="user_husbandORwife_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  স্বামি / স্ত্রী এর নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_husbandORwife_name_input" id="user_husbandORwife_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status ? $user_info_instance->user_husbandORwife_name : "" }}">
                </div>
              </div>




              <!-- user present address -->
              
              <div id="present_address" class="form-group">
                <label for="present_address_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  বর্তমান ঠিকানা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="present_address_input" id="present_address_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status ? $user_info_instance->present_address : "" }}">
                </div>
              </div>




              <!-- user permanent address name -->
              
              <div id="permanent_address" class="form-group">
                <label for="permanent_address_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  স্থায়ী ঠিকানা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="permanent_address_input" id="permanent_address_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status ? $user_info_instance->permanent_address : "" }}">
                </div>
              </div>



              <!-- user mobile no -->
              
              <div id="mobile_no" class="form-group">
                <label for="mobile_no_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোবাইল নম্বর 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="mobile_no_input" id="mobile_no_input" class="form-control col-md-7 col-xs-12"  type="text" value="{{ $info_status ? $user_info_instance->mobile_no : "" }}">
                </div>
              </div>



              <!-- user image -->
              
              <div id="user_image" class="form-group">
                <label for="user_image_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  ছবি
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_image_input" id="user_image_input" class="form-control col-md-7 col-xs-12"  type="file">
                </div>
              </div>



              <!-- date of being user of this company -->
              
              <div id="date_of_being_user" class="form-group">
                <label for="date_of_being_user_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  সদস্য হওয়ার তারিখ
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_of_being_user_input" id="date_of_being_user_input" class="form-control col-md-7 col-xs-12"  type="date" value="{{ $info_status ? $user_info_instance->date_of_being_user : "" }}">
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

    {{-- <img src={{ asset('storage/images/sheyar.png') }} alt=""> --}}
	        

@endsection