@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
		  <a href="{{ route('company_sodosso.home') }}" class="list-group-item">সদস্য বিবরন </a>
		  <a href="{{ route('company.sodosso_info_update_page') }}" class="list-group-item active">সদস্য বিবরন হালনাগাদ </a>
		  <a href="{{ route('company.sodoss_sheyar_info') }}" class="list-group-item">শেয়ার বিবরন </a>
		  <a href="{{ route('company.sodosso_sonchoy_info') }}" class="list-group-item">সঞ্চয় বিবরন </a>
		  <a href="{{ route('company.sodosso__loan_info') }}" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company.sodosso_delete') }}" class="list-group-item">সদস্য বাতিল </a>
		  <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item">মাসিক সঞ্চয় নির্ধারন </a>
		</div>

	</div>

@endsection



@section('main_frame_content')

	
	{{-- /*----------  take user number   ----------*/ --}}
	

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2></h2><br>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <h2></h2><br>

        	{{ csrf_field() }}

              <div id="company_member_page_sovvo_sodosso_number" class="form-group">
                <label for="company_member_page_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: end;">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="company_member_page_sovvo_sodosso_number_input" id="company_member_page_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number" required>
                </div>
              </div>


             


            
        </form>
      </div>
    </div><br><br>



    {{-- /*----------  form for updating user info  ----------*/ --}}
    
    

    

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.sodosso_info_update_store') }}" enctype="multipart/form-data">

          {{ csrf_field() }}

              <input type="hidden" id="user_membership_no" name="user_membership_no" value="">

              <!-- user name -->
              
              <div id="user_name" class="form-group">
                <label for="user_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name_input" id="user_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>



              <!-- user fathers name -->
              
              <div id="user_father_name" class="form-group">
                <label for="user_father_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  পিতার নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_father_name_input" id="user_father_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>



              <!-- user mothers name -->
              
              <div id="user_mother_name" class="form-group">
                <label for="user_mother_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  মাতার নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_mother_name_input" id="user_mother_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>




              <!-- user husband or wife name -->
              
              <div id="user_husbandORwife_name" class="form-group">
                <label for="user_husbandORwife_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  স্বামি / স্ত্রী এর নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_husbandORwife_name_input" id="user_husbandORwife_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>




              <!-- user present address -->
              
              <div id="present_address" class="form-group">
                <label for="present_address_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  বর্তমান ঠিকানা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="present_address_input" id="present_address_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>




              <!-- user permanent address name -->
              
              <div id="permanent_address" class="form-group">
                <label for="permanent_address_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  স্থায়ী ঠিকানা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="permanent_address_input" id="permanent_address_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>



              <!-- user mobile no -->
              
              <div id="mobile_no" class="form-group">
                <label for="mobile_no_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  মোবাইল নম্বর 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="mobile_no_input" id="mobile_no_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
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


               <!-- user nomenee name -->
              
              <div id="nominee_name" class="form-group">
                <label for="nominee_name_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  নোমিনির নাম
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="nominee_name_input" id="nominee_name_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>


              <!-- user nomenee relation -->
              
              <div id="nominee_relation" class="form-group">
                <label for="nominee_relation_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  নোমিনির সাথে সম্পর্ক  
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="nominee_relation_input" id="nominee_relation_input" class="form-control col-md-7 col-xs-12"  type="text" value="">
                </div>
              </div>



              <!-- date of being user of this company -->
              
              <div id="date_of_being_user" class="form-group">
                <label for="date_of_being_user_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  সদস্য হওয়ার তারিখ
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_of_being_user_input" id="date_of_being_user_input" class="form-control col-md-7 col-xs-12"  type="date" value="">
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
	

@endsection