@extends('layouts.jotbazar')

{{-- @section('hirizontal_nav_sodosso_active', 'class=active') --}}


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

 {{--  <div id="sidebar_links">

    <div class="list-group">
      <a href="{{ route('company_sodosso.home') }}" class="list-group-item">সদস্য বিবরন </a>
      <a href="{{ route('company.sodosso_info_update_page') }}" class="list-group-item">সদস্য বিবরন হালনাগাদ </a>
      <a href="{{ route('company.sodoss_sheyar_info') }}" class="list-group-item">শেয়ার বিবরন </a>
      <a href="{{ route('company.sodosso_sonchoy_info') }}" class="list-group-item">সঞ্চয় বিবরন </a>
      <a href="{{ route('company.sodosso__loan_info') }}" class="list-group-item">লোন বিবরন </a>
      <a href="{{ route('company.sodosso_delete') }}" class="list-group-item">সদস্য বাতিল </a>
      <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item active">মাসিক সঞ্চয় নির্ধারন </a>
    </div>
 --}}
  </div>

@endsection



@section('main_frame_content')

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Sheyar bikroy</h2>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.temp_sheyar_bikroy_info_update') }}">

          {{ csrf_field() }}

              <div id="sovvo_sodosso_number" class="form-group">
                <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
                </div>
              </div>



              <div id="to_sovvo_sodosso_number" class="form-group">
                <label for="to_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  যার কাছে হস্তান্তর করছে তার <br> সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="to_sovvo_sodosso_number_input" id="to_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number">
                </div>
              </div>




              <div id="number_of_sheyar" class="form-group">
                <label for="number_of_sheyar_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  হস্তান্তরকৃত শেয়ার সংখা
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="number_of_sheyar_input" id="number_of_sheyar_input" class="form-control col-md-7 col-xs-12"  type="number" min="0">
                </div>
              </div>



              {{-- <div id="sheyar_amount_in_money" class="form-group">
                <label for="sheyar_amount_in_money_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  প্রদেয় টাকার পরিমান <br> ( টাকায় )
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sheyar_amount_in_money_input" id="sheyar_amount_in_money_input" class="form-control col-md-7 col-xs-12"  type="number" readonly="true">
                </div>
              </div> --}}




              <div id="date" class="form-group">
                <label for="date_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  জমা দেওয়ার তারিখ 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_input" id="date_input" class="form-control col-md-7 col-xs-12"  type="text">
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