@extends('layouts.jotbazar')

@section('hirizontal_nav_sheyar_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links" style="font-size: 17px;">

		<div class="list-group">
		  <a href="{{ route('company.all_sheyar') }}" class="list-group-item">সব শেয়ার বিবরন </a>
		  <a href="{{ route('company.kroy_sheyar') }}" class="list-group-item active">ক্রয় </a>
		  <a href="{{ route('company.bikroy_sheyar') }}" class="list-group-item">হস্তান্তর </a>
		  
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th style="text-align: center; font-size: 22px;">যে ক্রয় করেছে </th>
	  	        <th style="text-align: center; font-size: 22px;">শেয়ার সংখা </th>
	  	        <th style="text-align: center; font-size: 22px;">টাকার পরিমান </th>
	  	        <th style="text-align: center; font-size: 22px;">তারিখ </th>
	  	      </tr>
	  	</thead>
	  	    <tbody style="text-align: center; font-size: 22px;">
	  	    	@foreach ($sheyar_info as $single_sheyar)
	  	    		

		  	      <tr>
		  	        <td>
		  	        	{{ $single_sheyar->UserBasicInfoKroy->name ." ( ". $single_sheyar->UserBasicInfoKroy->membership_no ." )" }}
		  	        </td>
		  	        <td>{{ $single_sheyar->sheyar_amount / 100 }}</td>
		  	        <td>{{ $single_sheyar->sheyar_amount  }}</td>
		  	        <td>{{ $single_sheyar->updated_at->formatLocalized('%A %d %B %Y') }}</td>
		  	      </tr>
	  	    		
	  	    	@endforeach
	  	      
	  	    </tbody>

	  </table>
	</div>

	<div class="pull-right" style="font-size: 20px;">

		{{ $sheyar_info->links() }}
		
	</div>

@endsection