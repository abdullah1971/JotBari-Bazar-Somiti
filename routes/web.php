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

/*=====  End of user entry page  ======*/


		


