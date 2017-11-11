@extends('layouts.user')

@section('hirizontal_nav_sheyar_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('user.Sheyar_all') }}" class="list-group-item active">সব শেয়ার বিবরন </a>
		  <a href="{{ route('user.Sheyar_kroy') }}" class="list-group-item">ক্রয় </a>
		  <a href="{{ route('user.Sheyar_sell') }}" class="list-group-item">হস্তান্তর </a>
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">শেয়ার সংখা </th>
	  	        <th style="text-align: center; font-size: 22px;">টাকার পরিমান </th>
	  	        <th style="text-align: center; font-size: 22px;">যার কাছে বিক্রয় করা হয়েছে </th>
	  	        <th style="text-align: center; font-size: 22px;">তারিখ </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">
	  	    	@foreach ($sheyar_instance as $single_sheyar)
	  	    		

		  	      <tr>
		  	        <td>{{ $single_sheyar->sheyar_amount / 100 }}</td>
		  	        <td>{{ $single_sheyar->sheyar_amount  }}</td>
		  	        <td>{{ $single_sheyar->to_whom  }}</td>
		  	        <td>{{ $single_sheyar->updated_at->formatLocalized('%A %d %B %Y') }}</td>
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

@endsection