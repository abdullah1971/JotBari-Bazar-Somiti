@extends('layouts.jotbazar')

@section('hirizontal_nav_sonchoy_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('compnay.net_sonchoy') }}" class="list-group-item active">মোট সঞ্চয় </a>
		  <a href="{{ route('company.fixed_monthly_sonchoy') }}" class="list-group-item">ফিক্স মাসিক সঞ্চয় </a>
		  <a href="{{ route('company.masik_sonchoy_joma') }}" class="list-group-item">মাসিক সঞ্চয় জমা </a>
		  <a href="{{ route('company.sonchoy_uttolon') }}" class="list-group-item">সঞ্চয় উত্তোলন </a>
		  
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
	  	        <th style="text-align: center; font-size: 22px;">মোট সঞ্চয় এর পরিমান </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">

	  	    	@foreach ($user_account_instance as $single_user_account)
	  	    		

		  	      <tr>
		  	        <td>{{ $single_user_account->UserBasicInfo->name }}</td>

		  	        <td>{{ $single_user_account->UserBasicInfo->membership_no }}</td>
		  	        <td>{{ $single_user_account->net_sonchoy }}</td>
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $user_account_instance->links() }}
		
	</div>

@endsection