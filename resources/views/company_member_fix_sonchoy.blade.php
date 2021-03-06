@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
		  <a href="#" class="list-group-item">সদস্য বিবরন </a>
		  <a href="#" class="list-group-item">শেয়ার বিবরন </a>
		  <a href="#" class="list-group-item">সঞ্চয় বিবরন </a>
		  <a href="#" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item active">মাসিক সঞ্চয় নির্ধারন </a>
		</div>

	</div>

@endsection



@section('main_frame_content')

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company_sodosso.masik_sonchoy_setting_store') }}">

        	{{ csrf_field() }}

              <div id="sovvo_sodosso_number" class="form-group">
                <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number" required>
                </div>
              </div>


              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	প্রদেয় টাকার পরিমান <br> ( টাকায় )
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sonchoy_monthly_fix_amount_input" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="number" required>
                </div>
              </div>


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">
              	
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                
              	<button type="submit" class="btn btn-success pull-right">Submit</button>

				  	{{-- <button class="btn btn-primary pull-right" type="reset" style="    margin-right: 5px;">Reset</button> --}}

              </div>
            </div>
        </form>
      </div>
    </div>
	        

@endsection