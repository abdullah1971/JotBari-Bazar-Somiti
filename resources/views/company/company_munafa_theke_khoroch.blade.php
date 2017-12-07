@extends('layouts.jotbazar')

@section('hirizontal_nav_munafa_theke_khoroch_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	{{-- <div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('company.loan_biboron') }}" class="list-group-item active">লোন বিবরন </a>
		  <a href="{{ route('company.loan_masik_munafa') }}" class="list-group-item">লোনের মাসিক মুনাফা</a>
		  <a href="{{ route('company.loan_giving_info') }}" class="list-group-item">লোনের জামিনদারের তথ্য </a>
		  
		  
		</div>

	</div> --}}

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">খরচের বিবরন</th>
	  	        <th style="text-align: center; font-size: 22px;">টাকার পরিমান</th>
	  	        <th style="text-align: center; font-size: 22px;">তারিখ</th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">

	  	    	@foreach ($munafa_theke_khoroch_instance as $single_munafa_theke_khoroch)
	  	    		

		  	      <tr>

		  	        <td>{{ $single_munafa_theke_khoroch->subject }}</td>
		  	        <td>{{ $single_munafa_theke_khoroch->money_amount }}</td>
		  	        <td>{{ $single_munafa_theke_khoroch->updated_at->formatLocalized('%A %d %B %Y') }}</td>
		  	          	        
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $munafa_theke_khoroch_instance->links() }}
		
	</div>

@endsection