<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*===========================================
=            daily entry portion            =
===========================================*/

	// entry point
	Route::get('/daily_entry', 'Daily_entry@index')->name('daily_entry.home');

	// form submit
	Route::post('/dailty_entry', 'Daily_entry@fromInfo')->name('daily_entry.form');



/*=====  End of daily entry portion  ======*/




/*==================================================
=            sodosso ( member ) portion            =
==================================================*/

	/* sodoss index */
	Route::get('/company_member', 'CompanySodossInfo@index')->name('company_sodosso.home');



	/* sodosso masik shonchoy setting */
	Route::get('/company_member_masik_sonchoy_set', 'CompanySodossInfo@masik_sonchoy_set')->name('company_sodosso.masik_sonchoy_set');

	Route::post('/company_member_masik_sonchoy_set', 'CompanySodossInfo@masik_sonchoy_setting_store')->name('company_sodosso.masik_sonchoy_setting_store');

/*=====  End of sodosso ( member ) portion  ======*/



/*==================================================
=            ajax data handling portion            =
==================================================*/

	Route::post('/get_all_data_about_specified_user', 'Daily_entry@Get_all_data_about_specified_user')->name('ajax_data.fetch_user_data');

/*=====  End of ajax data handling portion  ======*/



/*=======================================
=            user entry page            =
=======================================*/

	Route::get('/user_info', 'User_details@Index')->name('user.info_details');

	Route::get('/user_info_update', 'User_details@Update_page')->name('user.info_details_update');
	Route::post('/user_info_update', 'User_details@Update_page_store')->name('user.info_details_update_store');

/*=====  End of user entry page  ======*/



// /* user name */

// $user_instance->name = $request->user_name_input;
// $user_instance->save();

// /* other user info */

// $user_info_instance->membership_no = $user_instance->membership_no;
// $user_info_instance->user_father_name = $request->user_father_name_input;
// $user_info_instance->user_mother_name = $request->user_mother_name_input;
// $user_info_instance->user_husbandORwife_name = $request->user_husbandORwife_name_input;
// $user_info_instance->present_address = $request->present_address_input;
// $user_info_instance->permanent_address = $request->permanent_address_input;
// $user_info_instance->mobile_no = $request->mobile_no_input;
// $user_info_instance->date_of_being_user = $request->date_of_being_user_input;


// if ($request->hasFile('user_image_input')) {


// 	$image_name = $request->user_image_input->getClientOriginalName();

// 	$path = $request->user_image_input->storeAs('images', $image_name);

// 	$user_info_instance->image_path = $path;
// }


// $user_info_instance->save();

// return redirect()->route('user.info_details');





 	// return "something";
    	// if($user_info_instance->isEmpty()){

    	// 	$user_info_instance = new User_info;
    		
    	// 	return "store";
    	// }
    	// else{

    	// 	return "update";
    	// }


