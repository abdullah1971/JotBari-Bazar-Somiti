@extends('layouts.user')

@section('hirizontal_nav_sodoss_biboron_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">

		  <a href="{{ route('user.info_details') }}" class="list-group-item active">সদস্য বিবরন </a>
		  
		  {{-- <a href="{{ route('user.info_details_update') }}" class="list-group-item">সদস্য বিবরন হালনাগাদ </a> --}}
		 
		</div>

	</div>

@endsection



@section('main_frame_content')

    <div class="row container" style="margin-top: 20px; color: white;">
      <div id="user_info_main_frame" class="col-md-12 col-sm-12 col-xs-12" style="font-size: 22px;">
        
        <br>

        {{-- /* image */ --}}
        
        
        <div class="row">

          <div class="col-md-3 col-sm-3 col-xs-12">
            
          </div>
          
          {{-- <div class="col-md-3 col-sm-3 col-xs-12">

          </div> --}}
          
          {{-- <div class="col-md-3 col-sm-3 col-xs-12">
            
          </div> --}}

          <div class="col-md-3 col-sm-3 col-xs-12 thumbnail">

            @if ($info_status)
              
             <img src={{ asset("storage/images/$user_info_instance->image_path") }} alt="">
              
            @endif
          </div>


        </div>


        {{-- /* membership no */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            সভ্য সদস্য নম্বর 

          </div>
          
          <div class="col-md-6 col-sm-6 col-xs-12">
              
            {{ $user->membership_no }}

          </div>


        </div>



        {{-- /* name */ --}}
        
        <hr>
        <div class="row">

          <div class="col-md-2 col-sm-2 col-xs-12">
            
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12">
            
            নাম

          </div>
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            
            {{ $user->name }}

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->user_father_name }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->user_mother_name }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->user_husbandORwife_name }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->present_address }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->permanent_address }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->mobile_no }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            @if ($info_status)
              
              {{ $user_info_instance->date_of_being_user }}

            @endif

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            
            {{ $user_account_instance->account_status }}

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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
                        
            {{ $user_account_instance->sheyar }}
            
          
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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
                        
            {{ $user_account_instance->fixed_sonchoy }} tk
            
          
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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
                        
            {{ $user_account_instance->net_sonchoy }} tk
            
          
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
          
          <div class="col-md-6 col-sm-6 col-xs-12">
                        
            {{ $user_account_instance->taken_loan_amount - $user_account_instance->paid_loan_amount }} tk
            
          
          </div>


        </div>
        <hr>


        

      </div>
    </div>
	        

@endsection