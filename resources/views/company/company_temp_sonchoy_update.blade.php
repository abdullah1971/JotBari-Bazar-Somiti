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
            <h2>Sonchoy Update</h2>
            
            <div class="clearfix"></div>
          </div>
        <div>
        <br />

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.sonchoy_info_post') }}">

          {{ csrf_field() }}

              <div id="company_member_page_sovvo_sodosso_number" class="form-group">
                <label for="company_member_page_sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  member no
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="member_no" id="company_member_page_sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="text" >
                </div>
              </div>


              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  info type 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="info_type" id="daily_catagory_select" class="form-control input_select_val">
                          <option value="sonchoy_masik_joma">masik joma</option>
                          <option value="sonchoy_uttolon">uttolon</option>
                          <option value="sonchoy_munafa">sonchoy munafa</option>
                          <option value="sheyar_munafa">sheyar munafa</option>
                          
                        </select>
                </div>
              </div>


              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  money amount
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="money_amount" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="text" >
                </div>
              </div>


              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  jorimana amount
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="jorimana_amount" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="text" >
                </div>
              </div>


              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  total amount
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="total_amount" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="text" >
                </div>
              </div>



              {{-- <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  current month amount
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="current_month_amount" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="text" >
                </div>
              </div>
 --}}

              <div id="sonchoy_monthly_fix_amount" class="form-group">
                <label for="sonchoy_monthly_fix_amount_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                  date
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date" id="sonchoy_monthly_fix_amount_input" class="form-control col-md-7 col-xs-12"  type="text" >
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