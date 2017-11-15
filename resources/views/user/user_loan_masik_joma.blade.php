@extends('layouts.user')

@section('hirizontal_nav_loan_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('user.loan_uttolon') }}" class="list-group-item">লোন উত্তোলন</a>
		  <a href="{{ route('user.loan_joma') }}" class="list-group-item">লোন জমা</a>
		  <a href="{{ route('user.loan_masik_munafa') }}" class="list-group-item active">লোনের মাসিক মুনাফা</a>
		  
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">মাসিক লোন এর মুনাফা জমা</th>
	  	        <th style="text-align: center; font-size: 22px;">জরিমানা </th>
	  	        <th style="text-align: center; font-size: 22px;">মোট জমা </th>
	  	        <th style="text-align: center; font-size: 22px;">তারিখ </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">

	  	    	@foreach ($loan_instance as $single_loan)
	  	    		

		  	      <tr>
		  	        <td>{{ $single_loan->money_amount }}</td>
		  	        <td>{{ $single_loan->jorimana_amount }}</td>
		  	        <td>{{ $single_loan->total_amount }}</td>
		  	        <td>{{ $single_loan->updated_at->formatLocalized('%A %d %B %Y') }}</td>	  	        
		  	        	  	        
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $loan_instance->links() }}
		
	</div>

@endsection