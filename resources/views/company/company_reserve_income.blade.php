@extends('layouts.jotbazar')

@section('hirizontal_nav_bibidh_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
			
		  <a href="{{ route('company.reserve_income') }}" class="list-group-item active">আয় </a>
		  <a href="{{ route('company.reserve_spend') }}" class="list-group-item">ব্যয় </a>
		  
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">উৎস </th>
	  	        <th style="text-align: center; font-size: 22px;">সদস্য বিবরন ( জরিমানা ) </th>
	  	        <th style="text-align: center; font-size: 22px;">টাকার পরিমান</th>
	  	        <th style="text-align: center; font-size: 22px;">তারিখ </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">

	  	    	@foreach ($reserve_instance as $single_reserve_income)
	  	    		

		  	      <tr>
		  	        <td>
		  	        	@if ($single_reserve_income->info_type == "income")
		  	        		
		  	        		{{ $single_reserve_income->subject }}

		  	        	@elseif ($single_reserve_income->info_type == "sonchoy_masik_jorimana")

		  	        		{{ "সঞ্চয়ের জরিমানা" }}

	  	        		@elseif ($single_reserve_income->info_type == "loan_masik_jorimana")

	  	        			{{ "লোনের মুনাফার জরিমানা " }}
	  	        		
		  	        	@endif


		  	        </td>
		  	        <td>
		  	        	@if ($single_reserve_income->info_type == "sonchoy_masik_jorimana" || $single_reserve_income->info_type == "loan_masik_jorimana")
		  	        		

		  	        		{{ $single_reserve_income->UserBasicInfo->name ." ( ". $single_reserve_income->UserBasicInfo->membership_no . " ) " }}

		  	        		{{-- {{ "jorimana" }} --}}
		  	        		
		  	        	@endif
		  	        </td>
		  	        <td>{{ $single_reserve_income->money_amount }}</td>
		  	        <td>{{ $single_reserve_income->updated_at->formatLocalized('%A %d %B %Y') }}</td>
		  	        	  	        
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $reserve_instance->links() }}
		
	</div>

@endsection