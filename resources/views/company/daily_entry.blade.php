@extends('layouts.jotbazar')


@section('hirizontal_nav_dailyEntry_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '3')
@section('main_content_column_number', '9')


@section('sidebar_navigation')

	

<div id="daily_notification_bar">

	@php
		$i = 0;
	@endphp


	@foreach ($daily_entry_instance as $single_entry)
		
		@php
			$i++;
		@endphp

		@if ($single_entry->entry_type == "sheyar_and_buy")

			<div>

				<div id="panel_{{ $i }}" class="panel panel-info">
				  <!-- info panel contents -->
				  <div class="panel-heading">শেয়ার ক্রয় </div>
				  

				  <!-- List group -->
				  <ul class="list-group">
				    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_sheyar->UserBasicInfoKroy->name }}</li>
				    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_sheyar->user_id }}</li>
				    <li class="list-group-item">শেয়ার সংখাঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount / 100 }}</li>
				    <li class="list-group-item">টাকার পরিমানঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount }}</li>
				    
				  </ul>
				</div>
				

				<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
				<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
					<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
				</a>

				
			</div><br><br>
			

		@elseif ($single_entry->entry_type == "sheyar_and_sell")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">শেয়ার বিক্রয়ঃ  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_sheyar->UserBasicInfoKroy->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_sheyar->user_id }}</li>

			    <li class="list-group-item">যার কাছে বিক্রয় করা হয়েছেঃ  {{ $single_entry->Daily_entry_and_sheyar->UserBasicInfoBikroy->name ." ( ".$single_entry->Daily_entry_and_sheyar->to_whom." )"  }}</li>

			    <li class="list-group-item">শেয়ার সংখাঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount / 100 }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			

		@elseif ($single_entry->entry_type == "sheyar_and_sell")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">শেয়ার বিক্রয়  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_sheyar->UserBasicInfoKroy->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_sheyar->user_id }}</li>

			    <li class="list-group-item">যার কাছে বিক্রয় করা হয়েছেঃ  {{ $single_entry->Daily_entry_and_sheyar->UserBasicInfoBikroy->name ." ( ".$single_entry->Daily_entry_and_sheyar->to_whom." )"  }}</li>

			    <li class="list-group-item">শেয়ার সংখাঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount / 100 }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ {{ $single_entry->Daily_entry_and_sheyar->sheyar_amount }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			

		@elseif ($single_entry->entry_type == "sonchoy_and_masik_joma")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">সঞ্চয় মাসিক জমা   </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_sonchoy->UserBasicInfo->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_sonchoy->user_id }}</li>

			    <li class="list-group-item">মাসিক সঞ্চয় জমাঃ  {{ $single_entry->Daily_entry_and_sonchoy->money_amount  }}</li>

			    <li class="list-group-item">মাসিক সঞ্চয় এর জরিমানাঃ {{ $single_entry->Daily_entry_and_sonchoy->jorimana_amount }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ {{ $single_entry->Daily_entry_and_sonchoy->total_amount }}</li>

			    <li class="list-group-item">বর্তমানে মোট সঞ্চয়ঃ  {{ $single_entry->Daily_entry_and_sonchoy->current_month_sonchoy }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "sonchoy_and_uttolon")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">সঞ্চয় উত্তোলন   </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_sonchoy->UserBasicInfo->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_sonchoy->user_id }}</li>

			    <li class="list-group-item">মোট সঞ্চয় এর পরিমানঃ  {{ $single_entry->Daily_entry_and_sonchoy->current_month_sonchoy +  $single_entry->Daily_entry_and_sonchoy->money_amount }}</li>

			    <li class="list-group-item">উত্তোলনকৃত সঞ্চয় এর পরিমানঃ   {{ $single_entry->Daily_entry_and_sonchoy->money_amount }}</li>

			    <li class="list-group-item">বর্তমানে মোট সঞ্চয়ঃ  {{ $single_entry->Daily_entry_and_sonchoy->current_month_sonchoy }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "loan_and_bitoron")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">লোন বিতরন  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_loan->UserBasicInfo->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_loan->user_id }}</li>

			    <li class="list-group-item">সর্বোচ্চ লোন এর পরিমানঃ  {{ $single_entry->Daily_entry_and_loan->UserAccountInfo->sheyar * 4000 - $single_entry->Daily_entry_and_loan->UserAccountInfo->taken_loan_amount +  $single_entry->Daily_entry_and_loan->UserAccountInfo->paid_loan_amount + $single_entry->Daily_entry_and_loan->money_amount }}</li>

			    <li class="list-group-item">প্রদানকৃত লোন এর পরিমানঃ   {{ $single_entry->Daily_entry_and_loan->money_amount }}</li>

			    <li class="list-group-item">ভবিস্যতে লোন প্রাপ্তির পরিমানঃ  {{ $single_entry->Daily_entry_and_loan->UserAccountInfo->sheyar * 4000 - $single_entry->Daily_entry_and_loan->UserAccountInfo->taken_loan_amount +  $single_entry->Daily_entry_and_loan->UserAccountInfo->paid_loan_amount }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>


			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "loan_and_joma")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">লোন জমা  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_loan->UserBasicInfo->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_loan->user_id }}</li>

			    <li class="list-group-item">মোট লোন এর পরিমানঃ  {{ $single_entry->Daily_entry_and_loan->UserAccountInfo->taken_loan_amount -  $single_entry->Daily_entry_and_loan->UserAccountInfo->paid_loan_amount + $single_entry->Daily_entry_and_loan->money_amount }}</li>

			    <li class="list-group-item">প্রদানকৃত লোন এর পরিমানঃ   {{ $single_entry->Daily_entry_and_loan->money_amount }}</li>

			    <li class="list-group-item">অবশিস্ট লোন এর পরিমানঃ  {{ $single_entry->Daily_entry_and_loan->UserAccountInfo->taken_loan_amount -  $single_entry->Daily_entry_and_loan->UserAccountInfo->paid_loan_amount }}</li>

			    
			  </ul>
			</div>

			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>
			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "loan_and_masik_joma")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">লোন মাসিক জমা  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">নাম : {{ $single_entry->Daily_entry_and_loan->UserBasicInfo->name }}</li>

			    <li class="list-group-item">সদস্য নম্বরঃ {{ $single_entry->Daily_entry_and_loan->user_id }}</li>

			    <li class="list-group-item">মোট লোন এর পরিমানঃ  {{ $single_entry->Daily_entry_and_loan->UserAccountInfo->taken_loan_amount -  $single_entry->Daily_entry_and_loan->UserAccountInfo->paid_loan_amount  }}</li>

			    <li class="list-group-item">লোন এর মাসিক মুনাফা জমাঃ   {{ $single_entry->Daily_entry_and_loan->money_amount }}</li>

			    <li class="list-group-item">লোন এর মাসিক মুনাফা এর জরিমানাঃ  {{ $single_entry->Daily_entry_and_loan->jorimana_amount }}</li>

			    <li class="list-group-item">মোট জমাঃ  {{ $single_entry->Daily_entry_and_loan->total_amount }}</li>

			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "reserve_and_income")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">রিজার্ভ ( আয় )  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">উৎসঃ  {{ $single_entry->Daily_entry_and_reserve->subject }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ  {{ $single_entry->Daily_entry_and_reserve->money_amount }}</li>

			    
			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>

			
		</div><br><br>
			


		@elseif ($single_entry->entry_type == "reserve_and_spent")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">রিজার্ভ ( ব্যয় )  </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">উৎসঃ  {{ $single_entry->Daily_entry_and_reserve->subject }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ  {{ $single_entry->Daily_entry_and_reserve->money_amount }}</li>

			    
			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>
			
		</div><br><br>
			




		@elseif ($single_entry->entry_type == "munafa_theke_khoroch")

		<div>
			

			<div id="panel_{{ $i }}" class="panel panel-info">
			  <!-- info panel contents -->
			  <div class="panel-heading">মুনাফা থেকে খরচ </div>
			  

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">উৎসঃ  {{ $single_entry->Daily_entry_and_munafa_theke_khoroch->subject }}</li>

			    <li class="list-group-item">টাকার পরিমানঃ  {{ $single_entry->Daily_entry_and_munafa_theke_khoroch->money_amount }}</li>

			    
			    
			  </ul>
			</div>


			<button class="print_button btn btn-success " value="{{ $i }}" type="" style="margin-left: 60px;">প্রিন্ট করুন	</button>
			<a href="{{ route('company.daily_entry_notification_delete', ['id' => $single_entry->id]) }}">
				<button class="btn btn-danger confirm" value="{{ $single_entry->id }}" type="">বাতিল করুন </button>
			</a>
			
		</div><br><br>
			

		@endif


		

		
	@endforeach 





		
</div>


@endsection



@section('main_frame_content')

	
	        <div class="row">
	          <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="x_panel">
	              <div class="x_title">
	                {{-- <h2>Form Design <small>different form elements</small></h2> --}}
	                <br><br><br>
	                
	                <div class="clearfix"></div>
	              </div>
	              <div>
	                <br />
	                <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('daily_entry.form') }}">

	                	{{ csrf_field() }}

	                  <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="daily_catagory_select">ক্যাটাগরি</label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      <select name="daily_catagory_select" id="daily_catagory_select" class="form-control input_select_val">
	                        <option value="sheyar">শেয়ার</option>
	                        <option value="sonchoy">সঞ্চয়</option>
	                        <option value="loan">লোন</option>
	                        <option value="bibidh">রিজার্ভ</option>
	                        <option value="munafa_theke_khoroch">মুনাফা থেকে খরচ</option>
	                        <!-- <option>Option four</option> -->
	                      </select>
	                    </div>
	                  </div>

	                  <!--===============================================================
	                  =            sub catagory portion of all main catagory            =
	                  ================================================================-->
	                  
	                  	<!-- sheyar -->
	                  	
	                  	<div id="sheyar_subCatagory" class="form-group">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sheyar_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select name="sheyar_subCatagory_input" id="sheyar_subCatagory_input" class="form-control input_select_val">
	                  	      <option value="buy">ক্রয়</option>
	                  	      <option value="sell">হস্তান্তর</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>


	                  	<!-- sonchoy -->

	                  	<div id="sonchoy_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sonchoy_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select name="sonchoy_subCatagory_input" id="sonchoy_subCatagory_input" class="form-control input_select_val">
	                  	      <option value="sonchoy_masik_joma">মাসিক সঞ্চয় জমা</option>
	                  	      {{-- <option value="sonchoy_masik_joma_advanced">মাসিক সঞ্চয় জমা ( অগ্রিম )</option> --}}
	                  	      <option value="sonchoy_uttolon">সঞ্চয় উত্তলন</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>



	                  	<!-- loan -->

	                  	<div id="loan_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loan_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select name="loan_subCatagory_input" id="loan_subCatagory_input" class="form-control input_select_val">
	                  	      <option value="loan_bitoron">লোন বিতরন</option>
	                  	      <option value="loan_joma">লোন জমা</option>
	                  	      <option value="loan_masik_munafa">লোন এর মাসিক মুনাফা</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>



	                  	<!-- bibidh -->
	                  	
	                  	<div id="bibidh_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bibidh_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select name="bibidh_subCatagory_input" id="bibidh_subCatagory_input" class="form-control input_select_val">
	                  	      <option value="income">আয়</option>
	                  	      <option value="spent">ব্যয়</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>
	                  
	                  
	                  <!--====  End of sub catagory portion of all main catagory  ====-->
	                  

	                  <!--============================
	                  =            sheyar            =
	                  =============================-->
	                  
	                  
		                  


		                  <div id="sovvo_sodosso_number" class="form-group">
		                    <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	সভ্য সদস্য নম্বর
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>


		                  <div id="from_sovvo_sodosso_number" class="form-group remove_item">
		                    <label for="from_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	যে হস্তান্তর করছে তার <br> সভ্য সদস্য নম্বর
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="from_sovvo_sodosso_number_input" id="from_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>


		                  <div id="to_sovvo_sodosso_number" class="form-group remove_item">
		                    <label for="to_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	যার কাছে হস্তান্তর করছে তার <br> সভ্য সদস্য নম্বর
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="to_sovvo_sodosso_number_input" id="to_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>



		                  <div id="number_of_sheyar" class="form-group">
		                    <label for="number_of_sheyar_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	শেয়ার সংখা
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="number_of_sheyar_input" id="number_of_sheyar_input" class="form-control col-md-7 col-xs-12"  type="number" min="0">
		                    </div>
		                  </div>


		                  <div id="net_number_of_sheyar" class="form-group remove_item">
		                    <label for="net_number_of_sheyar_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	মোট শেয়ার সংখা
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="net_number_of_sheyar_input" id="net_number_of_sheyar_input" class="form-control col-md-7 col-xs-12"  type="number" min="0">
		                    </div>
		                  </div>

		                  <div id="selling_amount_of_sheyar" class="form-group remove_item">
		                    <label for="selling_amount_of_sheyar_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	হস্তান্তরকৃত শেয়ার সংখা
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="selling_amount_of_sheyar_input" id="selling_amount_of_sheyar_input" class="form-control col-md-7 col-xs-12"  type="number" min="0">
		                    </div>
		                  </div>



		                  <div id="sheyar_amount_in_money" class="form-group">
		                    <label for="sheyar_amount_in_money_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	প্রদেয় টাকার পরিমান <br> ( টাকায় )
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input name="sheyar_amount_in_money_input" id="sheyar_amount_in_money_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true">
		                    </div>
		                  </div>
	                  
	                  <!--====  End of sheyar  ====-->



	                  <!--=============================
	                  =            sonchoy            =
	                  ==============================-->
	                  	
	                  	



	                  	<div id="sonchoy_masik_joma" class="form-group remove_item">
	                  	  <label for="sonchoy_masik_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক সঞ্চয় জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_masik_joma_input" id="sonchoy_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true">
	                  	  </div>
	                  	</div>


	                  	<div id="sonchoy_masik_jorimana" class="form-group remove_item">
	                  	  <label for="sonchoy_masik_jorimana_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক সঞ্চয় এর জরিমানা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_masik_jorimana_input" id="sonchoy_masik_jorimana_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>

	                  	  <div class="col-md-3 col-sm-3 col-xs-12">
							{{-- <button class="btn btn-info"></button>	 --}}
							<button id="loan_modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#sonchoy_info_modal">মাসিক জমার বিবরন </button>              	  	
	                  	  </div>
	                  	</div>


	                  	<!-- <div id="sonchoy_masik_jorimana_char" class="form-group remove_item">
	                  	  <label for="sonchoy_masik_jorimana_char_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক সঞ্চয় এর জরিমানা এর ছাড় <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_masik_jorimana_char_input" id="sonchoy_masik_jorimana_char_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div> -->

	                  	<div id="sonchoy_net_masik_joma" class="form-group remove_item">
	                  	  <label for="sonchoy_net_masik_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_net_masik_joma_input" id="sonchoy_net_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div>

	                  	<div id="sonchoy_joma_date" class="form-group remove_item">
	                  	  <label for="sonchoy_joma_date_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	জমা দেওয়ার তারিখ 
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_joma_date_input" id="sonchoy_joma_date_input" class="form-control col-md-7 col-xs-12"  type="date">
	                  	  </div>
	                  	</div>


	                  	{{-- <div id="sonchoy_ogrim_joma_month" class="form-group remove_item">
	                  	  <label for="sonchoy_ogrim_joma_month_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসের পরিমান 
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_ogrim_joma_month_input" id="sonchoy_ogrim_joma_month_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div> --}}

	                  	{{-- <div id="sonchoy_ogrim_joma_amount" class="form-group remove_item">
	                  	  <label for="sonchoy_ogrim_joma_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_ogrim_joma_amount_input" id="sonchoy_ogrim_joma_amount_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true" value="2500">
	                  	  </div>
	                  	</div> --}}


	                  	<div id="sonchoy_net_amount" class="form-group remove_item">
	                  	  <label for="sonchoy_net_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট সঞ্চয় এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_net_amount_input" id="sonchoy_net_amount_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true" >
	                  	  </div>
	                  	</div>


	                  	<div id="sonchoy_uttolon_amount" class="form-group remove_item">
	                  	  <label for="sonchoy_uttolon_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	সঞ্চয় উত্তলন করুন <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="sonchoy_uttolon_amount_input" id="sonchoy_uttolon_amount_input" class="form-control col-md-7 col-xs-12"  type="number" max="12564789">
	                  	  </div>
	                  	</div>

	                  
	                  
	                  <!--====  End of sonchoy  ====-->




	                  <!--==========================
	                  =            loan            =
	                  ===========================-->
	                  
	                  	{{-- <div id="loan_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loan_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select id="loan_subCatagory_input" class="form-control input_select_val">
	                  	      <option>লোন বিতরন</option>
	                  	      <option>লোন জমা</option>
	                  	      <option>লোন এর মাসিক মুনাফা</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div> --}}

	
	                  	<div id="loan_max_possible_amount" class="form-group remove_item">
	                  	  <label for="loan_max_possible_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	সর্বোচ্চ লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_max_possible_amount_input" id="loan_max_possible_amount_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true">
	                  	  </div>
	                  	</div>


	                  	<div id="loan_giving_amount" class="form-group remove_item">
	                  	  <label for="loan_giving_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	প্রদাঙ্কৃত লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_giving_amount_input" id="loan_giving_amount_input" class="form-control col-md-7 col-xs-12"  type="number" max="465451">
	                  	  </div>
	                  	</div>



	                  	<div id="loan_total_haveTo_pay" class="form-group remove_item">
	                  	  <label for="loan_total_haveTo_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_total_haveTo_pay_input" id="loan_total_haveTo_pay_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true">
	                  	  </div>
	                  	</div>


	                  	<div id="loan_now_pay" class="form-group remove_item">
	                  	  <label for="loan_now_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	প্রদেয় লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_now_pay_input" id="loan_now_pay_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>

	                  	<div id="loan_remaining_pay" class="form-group remove_item">
	                  	  <label for="loan_remaining_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	অবশিস্ট লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_remaining_pay_input" id="loan_remaining_pay_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>

	                  	<div id="loan_joma_date" class="form-group remove_item">
	                  	  <label for="loan_joma_date_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	জমা দেওয়ার তারিখ 
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_joma_date_input" id="loan_joma_date_input" class="form-control col-md-7 col-xs-12"  type="date">
	                  	  </div>
	                  	</div>




	                  	<div id="loan_masik_munafa_joma" class="form-group remove_item">

	                  	  <label for="loan_masik_munafa_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা জমা <br> ( টাকায় )
	                  	  </label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_masik_munafa_joma_input" id="loan_masik_munafa_joma_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>

	                  	  <div class="col-md-1 col-sm-6 col-xs-12">
	                  	  	
	                  	  	<button id="loan_modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#loan_info_modal">loan details</button>

	                  	  </div>
	                  	</div>


	                  	<div id="loan_masik_jorimana" class="form-group remove_item">
	                  	  <label for="loan_masik_jorimana_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা এর জরিমানা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_masik_jorimana_input" id="loan_masik_jorimana_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>


	                  	<!-- <div id="loan_masik_jorimana_char" class="form-group remove_item">
	                  	  <label for="loan_masik_jorimana_char_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা এর জরিমানা এর ছাড় <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_masik_jorimana_char_input" id="loan_masik_jorimana_char_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div> -->


	                  	<div id="loan_net_masik_joma" class="form-group remove_item">
	                  	  <label for="loan_net_masik_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_net_masik_joma_input" id="loan_net_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div>


	                  	<div id="loan_masik_munafa_joma_date" class="form-group remove_item">
	                  	  <label for="loan_masik_munafa_joma_date_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	জমা দেওয়ার তারিখ 
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="loan_masik_munafa_joma_date_input" id="loan_masik_munafa_joma_date_input" class="form-control col-md-7 col-xs-12"  type="date">
	                  	  </div>
	                  	</div>


	                  
	                  <!--====  End of loan  ====-->



	                  <!--====================================
	                  =            bibidh portion            =
	                  =====================================-->
	                  
	                  	<div id="bibidh_ay_option" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bibidh_ay_option_input">উৎস</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select name="bibidh_ay_option_input" id="bibidh_ay_option_input" class="form-control input_select_val">
	                  	      <option value="form_sell">ফরম বিক্রি</option>
	                  	      <option value="vobon_1_vara">ভবন-১ এর ভাড়া </option>
	                  	      <option value="vobon_2_vara">ভবন-২ এর ভাড়া </option>
	                  	      <option value="vobon_3_vara">ভবন-৩ এর ভাড়া </option>
	                  	      <option value="vobon_4_vara">ভবন-৪ এর ভাড়া </option>
	                  	      <option value="vobon_5_vara">ভবন-৫ এর ভাড়া </option>
	                  	      <option value="vobon_6_vara">ভবন-৬ এর ভাড়া </option>
	                  	      <option value="vobon_7_vara">ভবন-৭ এর ভাড়া </option>
	                  	      <option value="vobon_8_vara">ভবন-৮ এর ভাড়া </option>
	                  	      <option value="pas_boi_bikri">পাশ বই বিক্রি </option>
	                  	      <option value="sodosso_vorti_fi">সদস্য ভর্তি ফি </option>
	                  	      <option value="others">অন্যান্য  </option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>


	                  	<div id="bibidh_biboron" class="form-group remove_item">
	                  	  <label for="bibidh_biboron_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	বিবরন 
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="bibidh_biboron_input" id="bibidh_biboron_input" class="form-control col-md-7 col-xs-12"  type="text">
	                  	  </div>
	                  	</div>


	                  	<div id="bibidh_uddesso" class="form-group remove_item">
	                  	  <label for="bibidh_uddesso_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	উদ্দেশ্য
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="bibidh_uddesso_input" id="bibidh_uddesso_input" class="form-control col-md-7 col-xs-12"  type="text">
	                  	  </div>
	                  	</div>


	                  	<div id="bibidh_money_amount" class="form-group remove_item">
	                  	  <label for="bibidh_money_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="bibidh_money_amount_input" id="bibidh_money_amount_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>


	                  
	                  <!--====  End of bibidh portion  ====-->



	                  <!--==================================================
	                  =            munafa theke khoroch portion            =
	                  ===================================================-->
	                  
	                  	<div id="munafa_theke_khoroch_uddesso" class="form-group remove_item">
	                  	  <label for="munafa_theke_khoroch_uddesso_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	উদ্দেশ্য
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="munafa_theke_khoroch_uddesso_input" id="munafa_theke_khoroch_uddesso_input" class="form-control col-md-7 col-xs-12"  type="text">
	                  	  </div>
	                  	</div>


	                  	<div id="munafa_theke_khoroch_money_amount" class="form-group remove_item">
	                  	  <label for="munafa_theke_khoroch_money_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input name="munafa_theke_khoroch_money_amount_input" id="munafa_theke_khoroch_money_amount_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>
	                  
	                  <!--====  End of munafa theke khoroch portion  ====-->
	                  
	                  
	                  
	                  <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
	                    	
	                    </label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      
	                    	<button type="submit" class="btn btn-success pull-right">Submit</button>

						  	{{-- <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button> --}}

	                    </div>
	                  </div>
	                  



	                  
	                  
	                  


	                  {{-- <div class="form-group remove_item">
	                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	                      <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
	                      <button type="submit" class="btn btn-success pull-right">Submit</button>
						  <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button>
	                    </div>
	                  </div> --}}

	                </form>
	              </div>
	            </div>
	          </div>
	        </div>






	 <div id="loan_info_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header">
	         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	         <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
	       </div>
	       <div class="modal-body">


	         <div id="loan_modal_table" class="table-responsive" style="margin-top: 20px;">
	         	  
	         	</div>
	         


	       </div>
	       <div class="modal-footer">
	         <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
	         {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
	       </div>
	     </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	 </div><!-- /.modal -->



	 <div id="sonchoy_info_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header">
	         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	         <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
	       </div>
	       <div class="modal-body">


	         <div id="sonchoy_modal_table" class="table-responsive" style="margin-top: 20px;">
	         	  
	         	</div>
	         


	       </div>
	       <div class="modal-footer">
	         <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
	         {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
	       </div>
	     </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	 </div><!-- /.modal -->


@endsection