@extends('layouts.jotbazar')

@section('hirizontal_nav_sodosso_active', 'class=active')


{{-- sidebar and main content column size setting --}}
@section('sidebar_column_number', '2')
@section('main_content_column_number', '10')


@section('sidebar_navigation')

	<div id="sidebar_links">

		<div class="list-group">
      <a href="{{ route('company_sodosso.home') }}" class="list-group-item">সদস্য বিবরন </a>
		  <a href="{{ route('company.sodosso_info_update_page') }}" class="list-group-item">সদস্য বিবরন হালনাগাদ </a>
		  <a href="{{ route('company.sodoss_sheyar_info') }}" class="list-group-item active">শেয়ার বিবরন </a>
		  <a href="{{ route('company.sodosso_sonchoy_info') }}" class="list-group-item">সঞ্চয় বিবরন </a>
      <a href="{{ route('company.sodosso__loan_info') }}" class="list-group-item">লোন বিবরন </a>
		  <a href="{{ route('company.sodosso_delete') }}" class="list-group-item">সদস্য বাতিল </a>
		  <a href="{{ route('company_sodosso.masik_sonchoy_set') }}" class="list-group-item">মাসিক সঞ্চয় নির্ধারন </a>
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

        <form id="" class="form-horizontal form-label-left" method="post" action="{{ route('company.single_sodoss_sheyar_info') }}">

        	{{ csrf_field() }}

              <div id="sovvo_sodosso_number" class="form-group">
                <label for="sovvo_sodosso_number_input" class="control-label col-md-3 col-sm-3 col-xs-12">
                	সভ্য সদস্য নম্বর
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="sovvo_sodosso_number_input" id="sovvo_sodosso_number_input" class="form-control col-md-7 col-xs-12"  type="number" required>
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




    <!-- sheyar info -->

    @if (!$sheyar_info->isEmpty())
      
      <div class="table-responsive" style="margin-top: 20px;">

        <div class="row">
          
          <div class="col-sm-offset-3 col-md-offset-3 col-xl-offset-3 col-sm-3 col-md-3 col-xl-3" style="font-size: 20px;">
            সদস্য নম্বর 
          </div>

          <div class="col-sm-6 col-md-6 col-xl-6" style="font-size: 20px;">
            {{ $sheyar_info[0]->UserBasicInfoKroy->membership_no }}
          </div>

        </div><br><br>

        
        <div class="row">
          
          <div class="col-sm-offset-3 col-md-offset-3 col-xl-offset-3 col-sm-3 col-md-3 col-xl-3" style="font-size: 20px;">
            নাম
          </div>

          <div class="col-sm-6 col-md-6 col-xl-6" style="font-size: 20px;">
            {{ $sheyar_info[0]->UserBasicInfoKroy->name }}
          </div>

        </div><br><br>

        
        <table class="table table-hover table-striped">
          
          <thead>
                <tr>
                  {{-- <th style="text-align: center; font-size: 22px;">যে ক্রয় করেছে /<br> যে বিক্রয় করেছে </th> --}}
                  <th style="text-align: center; font-size: 22px;">শেয়ার সংখা </th>
                  <th style="text-align: center; font-size: 22px;">টাকার পরিমান </th>
                  <th style="text-align: center; font-size: 22px;">যার কাছে বিক্রয় করা হয়েছে </th>
                  <th style="text-align: center; font-size: 22px;">তারিখ </th>
                </tr>
          </thead>
              <tbody style="text-align: center; font-size: 22px;">
                @foreach ($sheyar_info as $single_sheyar)
                  

                  <tr>
                    {{-- <td>
                      
                      {{ $single_sheyar->UserBasicInfoKroy->name ." ( ". $single_sheyar->UserBasicInfoKroy->membership_no ." )" }}
                      
                    </td> --}}
                    <td>{{ $single_sheyar->sheyar_amount / 100 }}</td>
                    <td>{{ $single_sheyar->sheyar_amount  }}</td>
                    <td>
                      @if ($single_sheyar->to_whom != null)
                      {{ $single_sheyar->UserBasicInfoBikroy->name ." ( ". $single_sheyar->UserBasicInfoBikroy->membership_no ." )" }}
                      @endif
                    </td>
                    <td>{{ $single_sheyar->updated_at->formatLocalized('%A %d %B %Y') }}</td>
                  </tr>
                  
                @endforeach
                
              </tbody>

        </table>
      </div>

      <div class="pull-right" style="font-size: 20px;">

        {{ $sheyar_info->links() }}
        
      </div>
      
    @endif

    
	        

@endsection