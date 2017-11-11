<!DOCTYPE html>
<html>
<head>

	<!-- /*----------  meta data  ----------*/ -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--   heading   -->
	
	<title>জোতবাজার বণিক সমবায় সমিতি</title>

	

	<!--   external css group   -->
	

	{{-- /* bootstrap css */ --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	{{-- /* custom css */ --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- 002B36 -->

</head>
<body>

	


	<div id="heading_banner">

		<img id="bannar_image" src="{{ asset('photo/bannar.jpg') }}" alt="">

	</div>


	<nav id="navigation_bar" class="navbar navbar-inverse navbar-fixed-top" style="background-color: #002B36;margin-top: 150px;">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <!-- <a class="navbar-brand" href="#">Project name</a> -->
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_sodoss_biboron_active')><a href="{{ route('user.info_details') }}">সদস্য বিবরন </a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_sheyar_active')><a href="{{ route('user.Sheyar_kroy') }}">শেয়ার </a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_sonchoy_active')><a href="#">সঞ্চয়</a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_loan_active')><a href="#">লোন </a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_closing_active')><a href="#">ক্লোজিং</a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_comitee_active')><a href="#">কমিটি</a></li>

	            <li style="padding: 0 12px;" @yield('hirizontal_nav_search_active')><a href="#">খুজুন</a></li>



	            <li>
	                <a href="{{ route('logout') }}"
	                    onclick="event.preventDefault();
	                             document.getElementById('logout-form').submit();">
	                    লগ আউট
	                </a>

	                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    {{ csrf_field() }}
	                </form>
	            </li>


	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	<!-- <div id="navigation_bar"> -->
		
	

	<!-- </div> -->


	<div id="main_body" style="margin-top: 50px;">
		
		<div class="col-sm-@yield('sidebar_column_number')">


			@yield('sidebar_navigation')


		</div>

		<div class="col-sm-@yield('main_content_column_number')">
			
	        
			@yield('main_frame_content')


		</div>

	</div>

	<div id="footer">
		
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	{{-- /* jquery */ --}}
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

	{{-- /* bootstrap js */ --}}
	<script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


</body>
</html>