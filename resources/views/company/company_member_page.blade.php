@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
		  <a href="{{ route('company_sodosso.home') }}" class="list-group-item active">সদস্য বিবরন </a>
		  <a href="{{ route('company.sodosso_info_update_page') }}" class="list-group-item">সদস্য বিবরন হালনাগাদ </a>
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
            <h2>Form Design <small>different form elements</small></h2>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <form class="form-horizontal form-label-left">

        	{{ csrf_field() }}

              <div id="company_member_page_sovvo_sodosso_number" class="form-group">
                <label for="company_member_page_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="company_member_page_sovvo_sodosso_number_input" id="company_member_page_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number" required>
                </div>
              </div>


             


            
        </form>
      </div>
    </div>



    {{-- /*----------  show user data after fetching data  ----------*/ --}}
    

    <div class="row container" style="margin-top: 20px; color: white;">
      <div id="user_info_main_frame" class="col-md-12 col-sm-12 col-xs-12" style="font-size: 22px;">
        
        <br>

        {{-- /* image */ --}}
        
        
        <div class="row">

          <div class="col-md-3 col-sm-3 col-xs-12">
            
          </div>
          

          <div id="member_image" class="col-md-3 col-sm-3 col-xs-12 thumbnail">

            {{-- @if ($info_status)
              
             <img src={{ asset("storage/images/$user_info_instance->image_path") }} alt="">
              
            @endif --}}

          </div>


        </div>


        {{-- /* membership no */ --}}
        
        {{-- <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            সভ্য সদস্য নম্বর 

          </div>
          
          <div id="member_no" class="col-md-6 col-sm-6 col-xs-12">
              
             {{ $user->membership_no }} 

          </div>


        </div> --}}



        {{-- /* name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            নাম

          </div>
          
          <div id="member_name" class="col-md-6 col-sm-6 col-xs-12">
            
            {{-- {{ $user->name }} --}}

          </div>


        </div>
        



        {{-- /* fathers name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            পিতার নাম

          </div>
          
          <div id="member_father_name" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->user_father_name }}

            @endif --}}

          </div>


        </div>



        {{-- /* mothers name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
           মাতার নাম

          </div>
          
          <div id="member_mother_name" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->user_mother_name }}

            @endif --}}

          </div>


        </div>



        {{-- /* housband or wife  name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            
            স্বামি / স্ত্রী এর নাম 

          </div>
          
          <div id="member_husbandORwife_name" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->user_husbandORwife_name }}

            @endif --}}

          </div>


        </div>




        {{-- /* present address */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            বর্তমান ঠিকানা

          </div>
          
          <div id="member_present_address" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->present_address }}

            @endif --}}

          </div>


        </div>


        {{-- /* permanent address */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            স্থায়ী ঠিকানা

          </div>
          
          <div id="member_permanent_address" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->permanent_address }}

            @endif --}}

          </div>


        </div>





        {{-- /* mobile no */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            মোবাইল নম্বর 

          </div>
          
          <div id="member_mobile_no" class="col-md-6 col-sm-6 col-xs-12">
           {{--  @if ($info_status)
              
              {{ $user_info_instance->mobile_no }}

            @endif --}}

          </div>


        </div>


        {{-- /* nominee name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            নোমিনির নাম

          </div>
          
          <div id="nominee_name_input" class="col-md-6 col-sm-6 col-xs-12">
           {{--  @if ($info_status)
              
              {{ $user_info_instance->mobile_no }}

            @endif --}}

          </div>


        </div>



        {{-- /* nominee relation */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            নোমিনির সাথে সম্পর্ক 

          </div>
          
          <div id="nominee_relation_input" class="col-md-6 col-sm-6 col-xs-12">
           {{--  @if ($info_status)
              
              {{ $user_info_instance->mobile_no }}

            @endif --}}

          </div>


        </div>




        {{-- /* sodosso pod er date */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            সদস্য হওয়ার তারিখ 

          </div>
          
          <div id="member_date_of_being_user" class="col-md-6 col-sm-6 col-xs-12">
            {{-- @if ($info_status)
              
              {{ $user_info_instance->date_of_being_user }}

            @endif --}}

          </div>


        </div>




        {{-- /* account status */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            একাউন্ট

          </div>
          
          <div id="member_account_status" class="col-md-6 col-sm-6 col-xs-12">
            
            {{-- {{ $user_account_instance->account_status }} --}}

          </div>


        </div>




        {{-- /* sheyar amount */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            শেয়ার সংখা

          </div>
          
          <div id="member_sheyar" class="col-md-6 col-sm-6 col-xs-12">
                        
            {{-- {{ $user_account_instance->sheyar }} --}}
            
          
          </div>


        </div>




        {{-- /* fixed sonchoy amount */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            ফিক্সড সঞ্চয় 

          </div>
          
          <div id="member_fixed_sonchoy" class="col-md-6 col-sm-6 col-xs-12">
                        
            {{-- {{ $user_account_instance->fixed_sonchoy }} tk --}}
            
          
          </div>


        </div>




        {{-- /* sonchoy amount */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            মোট সঞ্চয়

          </div>
          
          <div id="member_net_sonchoy" class="col-md-6 col-sm-6 col-xs-12">
                        
            {{-- {{ $user_account_instance->net_sonchoy }} tk --}}
            
          
          </div>


        </div>
        


        {{-- /* loan amount */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            মোট লোন 

          </div>
          
          <div id="member_net_loan" class="col-md-6 col-sm-6 col-xs-12">
                        
            {{-- {{ $user_account_instance->taken_loan_amount - $user_account_instance->paid_loan_amount }} tk --}}
            
          
          </div>


        </div>
        <hr>


        

      </div>
    </div>
	

@endsection