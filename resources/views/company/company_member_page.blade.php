@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')



@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
		  <a href="#" class="list-group-item active">সদস্য বিবরন </a>
		  <a href="#" class="list-group-item">শেয়ার বিবরন </a>
		  <a href="#" class="list-group-item">সঞ্চয় বিবরন </a>
		  <a href="#" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item">মাসিক সঞ্চয় নির্ধারন </a>
		</div>

	</div>

@endsection



@section('main_frame_content')

	<div class="table-responsive" style="margin-top: 20px;">
	  <table class="table table-hover table-striped">
	    
	  	<thead>
	  	      <tr>
	  	        <th>Firstname</th>
	  	        <th>Lastname</th>
	  	        <th>Email</th>
	  	      </tr>
	  	</thead>
	  	    <tbody>
	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>

	  	      <tr>
	  	        <td>John</td>
	  	        <td>Doe</td>
	  	        <td>john@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>Mary</td>
	  	        <td>Moe</td>
	  	        <td>mary@example.com</td>
	  	      </tr>
	  	      <tr>
	  	        <td>July</td>
	  	        <td>Dooley</td>
	  	        <td>july@example.com</td>
	  	      </tr>
	  	    </tbody>

	  </table>
	</div>

@endsection