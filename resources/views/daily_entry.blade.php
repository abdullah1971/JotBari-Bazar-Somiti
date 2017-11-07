@extends('layouts.jotbazar')


@section('hirizontal_nav_dailyEntry_active', 'class=active')


@section('sidebar_navigation')

	<div id="daily_notification_bar">
		
		<div class="panel panel-info">
		  <!-- info panel contents -->
		  <div class="panel-heading">Panel heading</div>
		  <div class="panel-body">
		    <p>...</p>
		  </div>

		  <!-- List group -->
		  <ul class="list-group">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		    <li class="list-group-item">Morbi leo risus</li>
		    <li class="list-group-item">Porta ac consectetur ac</li>
		    <li class="list-group-item">Vestibulum at eros</li>
		  </ul>
		</div>


		<div class="panel panel-info">
		  <!-- info panel contents -->
		  <div class="panel-heading">Panel heading</div>
		  <div class="panel-body">
		    <p>...</p>
		  </div>

		  <!-- List group -->
		  <ul class="list-group">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		    <li class="list-group-item">Morbi leo risus</li>
		    <li class="list-group-item">Porta ac consectetur ac</li>
		    <li class="list-group-item">Vestibulum at eros</li>
		  </ul>
		</div>


		<div class="panel panel-info">
		  <!-- info panel contents -->
		  <div class="panel-heading">Panel heading</div>
		  <div class="panel-body">
		    <p>...</p>
		  </div>

		  <!-- List group -->
		  <ul class="list-group">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		    <li class="list-group-item">Morbi leo risus</li>
		    <li class="list-group-item">Porta ac consectetur ac</li>
		    <li class="list-group-item">Vestibulum at eros</li>
		  </ul>
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
	                <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('daily_entry.form') }}">

	                	{{ csrf_field() }}

	                  <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="daily_catagory_select">ক্যাটাগরি</label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      <select id="daily_catagory_select" class="form-control input_select_val">
	                        <option>শেয়ার</option>
	                        <option>সঞ্চয়</option>
	                        <option>লোন</option>
	                        <option>রিজার্ভ</option>
	                        <option>মুনাফা থেকে খরচ</option>
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

	                  	    <select id="sheyar_subCatagory_input" class="form-control input_select_val">
	                  	      <option>ক্রয়</option>
	                  	      <option>হস্তান্তর</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>


	                  	<!-- sonchoy -->

	                  	<div id="sonchoy_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sonchoy_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select id="sonchoy_subCatagory_input" class="form-control input_select_val">
	                  	      <option>মাসিক সঞ্চয় জমা</option>
	                  	      <option>সঞ্চয় উত্তলন</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>



	                  	<!-- loan -->

	                  	<div id="loan_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loan_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select id="loan_subCatagory_input" class="form-control input_select_val">
	                  	      <option>লোন বিতরন</option>
	                  	      <option>লোন জমা</option>
	                  	      <option>লোন এর মাসিক মুনাফা</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>



	                  	<!-- bibidh -->
	                  	
	                  	<div id="bibidh_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bibidh_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select id="bibidh_subCatagory_input" class="form-control input_select_val">
	                  	      <option>আয়</option>
	                  	      <option>ব্যয়</option>
	                  	      
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
		                      <input id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>


		                  <div id="from_sovvo_sodosso_number" class="form-group remove_item">
		                    <label for="from_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	যে হস্তান্তর করছে তার <br> সভ্য সদস্য নম্বর
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input id="from_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>


		                  <div id="to_sovvo_sodosso_number" class="form-group remove_item">
		                    <label for="to_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	যার কাছে হস্তান্তর করছে তার <br> সভ্য সদস্য নম্বর
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input id="to_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
		                    </div>
		                  </div>



		                  <div id="number_of_sheyar" class="form-group">
		                    <label for="number_of_sheyar_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	শেয়ার সংখা
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input id="number_of_sheyar_input" class="form-control col-md-7 col-xs-12"  type="number" min="0">
		                    </div>
		                  </div>



		                  <div id="sheyar_amount_in_money" class="form-group">
		                    <label for="sheyar_amount_in_money_input" class="control-label col-md-3 col-sm-3 col-xs-12">
		                    	প্রদেয় টাকার পরিমান <br> ( টাকায় )
		                    </label>
		                    <div class="col-md-6 col-sm-6 col-xs-12">
		                      <input id="sheyar_amount_in_money_input" class="form-control col-md-7 col-xs-12"  type="text" disabled>
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
	                  	    <input id="sonchoy_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" disabled>
	                  	  </div>
	                  	</div>


	                  	<div id="sonchoy_masik_jorimana" class="form-group remove_item">
	                  	  <label for="sonchoy_masik_jorimana_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক সঞ্চয় এর জরিমানা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="sonchoy_masik_jorimana_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>


	                  	<!-- <div id="sonchoy_masik_jorimana_char" class="form-group remove_item">
	                  	  <label for="sonchoy_masik_jorimana_char_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক সঞ্চয় এর জরিমানা এর ছাড় <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="sonchoy_masik_jorimana_char_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div> -->

	                  	<div id="sonchoy_net_masik_joma" class="form-group remove_item">
	                  	  <label for="sonchoy_net_masik_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="sonchoy_net_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div>


	                  	<div id="sonchoy_net_amount" class="form-group remove_item">
	                  	  <label for="sonchoy_net_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট সঞ্চয় এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="sonchoy_net_amount_input" class="form-control col-md-7 col-xs-12"  type="number" disabled>
	                  	  </div>
	                  	</div>


	                  	<div id="sonchoy_uttolon_amount" class="form-group remove_item">
	                  	  <label for="sonchoy_uttolon_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	সঞ্চয় উত্তলন করুন <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="sonchoy_uttolon_amount_input" class="form-control col-md-7 col-xs-12"  type="number" max="12564789">
	                  	  </div>
	                  	</div>

	                  
	                  
	                  <!--====  End of sonchoy  ====-->




	                  <!--==========================
	                  =            loan            =
	                  ===========================-->
	                  
	                  	<div id="loan_subCatagory" class="form-group remove_item">

	                  	  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loan_subCatagory_input">সাব ক্যাটাগরি</label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">

	                  	    <select id="loan_subCatagory_input" class="form-control input_select_val">
	                  	      <option>লোন বিতরন</option>
	                  	      <option>লোন জমা</option>
	                  	      <option>লোন এর মাসিক মুনাফা</option>
	                  	      
	                  	    </select>

	                  	  </div>
	                  	</div>

	
	                  	<div id="loan_max_possible_amount" class="form-group remove_item">
	                  	  <label for="loan_max_possible_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	সর্বোচ্চ লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_max_possible_amount_input" class="form-control col-md-7 col-xs-12"  type="number" disabled>
	                  	  </div>
	                  	</div>


	                  	<div id="loan_giving_amount" class="form-group remove_item">
	                  	  <label for="loan_giving_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	প্রদাঙ্কৃত লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_giving_amount_input" class="form-control col-md-7 col-xs-12"  type="number" max="465451">
	                  	  </div>
	                  	</div>



	                  	<div id="loan_total_haveTo_pay" class="form-group remove_item">
	                  	  <label for="loan_total_haveTo_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_total_haveTo_pay_input" class="form-control col-md-7 col-xs-12"  type="number" disabled>
	                  	  </div>
	                  	</div>


	                  	<div id="loan_now_pay" class="form-group remove_item">
	                  	  <label for="loan_now_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	প্রদেয় লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_now_pay_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>

	                  	<div id="loan_remaining_pay" class="form-group remove_item">
	                  	  <label for="loan_remaining_pay_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	অবশিস্ট লোন এর পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_remaining_pay_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>



	                  	<div id="loan_masik_munafa_joma" class="form-group remove_item">

	                  	  <label for="loan_masik_munafa_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা জমা <br> ( টাকায় )
	                  	  </label>

	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_masik_munafa_joma_input" class="form-control col-md-7 col-xs-12"  type="number" disabled>
	                  	  </div>

	                  	  <div class="col-md-1 col-sm-6 col-xs-12">
	                  	  	
	                  	  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loan_info_modal">loan details</button>

	                  	  </div>
	                  	</div>


	                  	<div id="loan_masik_jorimana" class="form-group remove_item">
	                  	  <label for="loan_masik_jorimana_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা এর জরিমানা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_masik_jorimana_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>


	                  	<!-- <div id="loan_masik_jorimana_char" class="form-group remove_item">
	                  	  <label for="loan_masik_jorimana_char_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মাসিক লোন এর মুনাফা এর জরিমানা এর ছাড় <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_masik_jorimana_char_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div> -->

	                  	<div id="loan_net_masik_joma" class="form-group remove_item">
	                  	  <label for="loan_net_masik_joma_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	মোট জমা <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="loan_net_masik_joma_input" class="form-control col-md-7 col-xs-12"  type="number" value="0">
	                  	  </div>
	                  	</div>

	                  
	                  <!--====  End of loan  ====-->



	                  <!--====================================
	                  =            bibidh portion            =
	                  =====================================-->
	                  
	                  	


	                  	<div id="bibidh_uddesso" class="form-group remove_item">
	                  	  <label for="bibidh_uddesso_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	উদ্দেশ্য
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="bibidh_uddesso_input" class="form-control col-md-7 col-xs-12"  type="text">
	                  	  </div>
	                  	</div>


	                  	<div id="bibidh_money_amount" class="form-group remove_item">
	                  	  <label for="bibidh_money_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="bibidh_money_amount_input" class="form-control col-md-7 col-xs-12"  type="number">
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
	                  	    <input id="munafa_theke_khoroch_uddesso_input" class="form-control col-md-7 col-xs-12"  type="text">
	                  	  </div>
	                  	</div>


	                  	<div id="munafa_theke_khoroch_money_amount" class="form-group remove_item">
	                  	  <label for="munafa_theke_khoroch_money_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
	                  	  	পরিমান <br> ( টাকায় )
	                  	  </label>
	                  	  <div class="col-md-6 col-sm-6 col-xs-12">
	                  	    <input id="munafa_theke_khoroch_money_amount_input" class="form-control col-md-7 col-xs-12"  type="number">
	                  	  </div>
	                  	</div>
	                  
	                  <!--====  End of munafa theke khoroch portion  ====-->
	                  
	                  
	                  
	                  <div id="munafa_theke_khoroch_money_amount" class="form-group">
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
	         <div class="row">
	           <div class="col-md-4">.col-md-4</div>
	           <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
	         </div>
	         <div class="row">
	           <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
	           <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
	         </div>
	         <div class="row">
	           <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
	         </div>
	         <div class="row">
	           <div class="col-sm-9">
	             Level 1: .col-sm-9
	             <div class="row">
	               <div class="col-xs-8 col-sm-6">
	                 Level 2: .col-xs-8 .col-sm-6
	               </div>
	               <div class="col-xs-4 col-sm-6">
	                 Level 2: .col-xs-4 .col-sm-6
	               </div>
	             </div>
	           </div>
	         </div>
	       </div>
	       <div class="modal-footer">
	         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         <button type="button" class="btn btn-primary">Save changes</button>
	       </div>
	     </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	 </div><!-- /.modal -->


@endsection