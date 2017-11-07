<!DOCTYPE html>
<html>
<head>

	<!-- /*----------  meta data  ----------*/ -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- /*----------  heading  ----------*/ -->
	
	<title>জোতবাজার বণিক সমবায় সমিতি</title>

	

	<!-- /*----------  external css group  ----------*/ -->
	
	
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

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
	            <li @yield('hirizontal_nav_dailyEntry_active')><a href="index.html">প্রাত্যাহিক আদান-প্রদান</a></li>
	            <li @yield('hirizontal_nav_sheyar_active')><a href="#">শেয়ার </a></li>
	            <li @yield('hirizontal_nav_sonchoy_active')><a href="#">সঞ্চয়</a></li>
	            <li @yield('hirizontal_nav_loan_active')><a href="#">লোন </a></li>
	            <li @yield('hirizontal_nav_bibidh_active')><a href="#">বিবিধ</a></li>
	            <li @yield('hirizontal_nav_closing_active')><a href="#">ক্লোজিং</a></li>
	            <li @yield('hirizontal_nav_sodosso_active')><a href="#">সদস্য</a></li>
	            <li @yield('hirizontal_nav_comitee_active')><a href="#">কমিটি</a></li>
	            <li @yield('hirizontal_nav_search_active')><a href="#">খুজুন</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	<!-- <div id="navigation_bar"> -->
		
	

	<!-- </div> -->


	<div id="main_body" style="margin-top: 50px;">
		
		<div class="col-sm-3">


			@yield('sidebar_navigation')


		</div>

		<div class="col-sm-9">
			
	        
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

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}

    <!-- Latest compiled and minified JavaScript -->
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


</body>
</html>