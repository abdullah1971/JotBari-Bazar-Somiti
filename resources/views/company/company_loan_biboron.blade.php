@extends('layouts.jotbazar')

@section('hirizontal_nav_loan_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('company.loan_biboron') }}" class="list-group-item active">লোন বিবরন </a>
		  <a href="{{ route('company.loan_masik_munafa') }}" class="list-group-item">লোনের মাসিক মুনাফা</a>
		  
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">সদস্যের নাম</th>
	  	        <th style="text-align: center; font-size: 22px;">সদস্য নম্বর</th>
	  	        <th style="text-align: center; font-size: 22px;">শেয়ার সংখা </th>
	  	        <th style="text-align: center; font-size: 22px;">গ্রহনকৃত লোনের পরিমান </th>
	  	        <th style="text-align: center; font-size: 22px;">শোধকৃত লোনের পরিমান </th>
	  	        <th style="text-align: center; font-size: 22px;">ভবিস্যতে সর্বোচ্চ লোন গ্রহনের পরিমান </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">

	  	    	@foreach ($user_account_instance as $single_user_account)
	  	    		

		  	      <tr>
		  	        <td>{{ $single_user_account->UserBasicInfo->name }}</td>
		  	        <td>{{ $single_user_account->UserBasicInfo->membership_no }}</td>
		  	        <td>{{ $single_user_account->sheyar }}</td>
		  	        <td>{{ $single_user_account->taken_loan_amount }}</td>
		  	        <td>{{ $single_user_account->paid_loan_amount }}</td>
		  	        <td>{{ $single_user_account->sheyar * 4000 - $single_user_account->taken_loan_amount + $single_user_account->paid_loan_amount }}</td>	  	        
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $user_account_instance->links() }}
		
	</div>

@endsection