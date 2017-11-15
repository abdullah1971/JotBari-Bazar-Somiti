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


/*=======================================
=            company portion            =
=======================================*/

	/**
	 *
	 * daily entry portion
	 *
	 */
	

	// entry point
	Route::get('/daily_entry', 'Daily_entry_controller@index')->name('daily_entry.home');

	// form submit
	Route::post('/dailty_entry', 'Daily_entry_controller@fromInfo')->name('daily_entry.form');



	/**
	 *
	 * sheyar portion
	 *
	 */
	

	/* all sheyar */
	Route::get('sheyar_all', 'CompanySheyar@AllSheyar')->name('company.all_sheyar');

	/* kroy sheyar */
	Route::get('sheyar_kroy', 'CompanySheyar@KroySheyar')->name('company.kroy_sheyar');

	/* bikroy sheyar */
	Route::get('sheyar_bikroy', 'CompanySheyar@BiroySheyar')->name('company.bikroy_sheyar');



	/**
	 *
	 * sonchoy portion
	 *
	 */
	

	/* all member net sonchoy */
	Route::get('all_user_net_sonchoy', 'CompanySonchoyController@NetSonchoy')->name('compnay.net_sonchoy');

	/* all member fixed sonchoy */
	Route::get('all_user_fixed_monthly_sonchoy', 'CompanySonchoyController@FixedSonchoy')->name('company.fixed_monthly_sonchoy');

	/* all member sonchoy masik joma */
	Route::get('all_user_masik_sonchoy_joma', 'CompanySonchoyController@MasikJoma')->name('company.masik_sonchoy_joma');
	
	/* all member sonchoy uttolon */
	Route::get('all_user_sonchoy_uttolon', 'CompanySonchoyController@Uttolon')->name('company.sonchoy_uttolon');






	/**
	 *
	 * loan portion
	 *
	 */
	
	/* loan biboron */
	Route::get('all_user_loan_biboron', 'CompanyLoanController@LoanBiboron')->name('company.loan_biboron');

	/* loan masik munafa */
	Route::get('loan_masik_munafa', 'CompanyLoanController@LoanMasikMunafa')->name('company.loan_masik_munafa');




	/**
	 *
	 * reserve portion
	 *
	 */
	
	/* income */
	Route::get('all_income_reserve', 'CompanyReserveController@Income')->name('company.reserve_income');

	/* income */
	Route::get('all_spend_reserve', 'CompanyReserveController@Spend')->name('company.reserve_spend');




	/**
	 *
	 * sodosso portion
	 *
	 */
	


	/* sodoss index */
	Route::get('/company_member', 'CompanySodossInfo@index')->name('company_sodosso.home');



	/* sodosso masik shonchoy setting */
	Route::get('/company_member_masik_sonchoy_set', 'CompanySodossInfo@masik_sonchoy_set')->name('company_sodosso.masik_sonchoy_set');

	Route::post('/company_member_masik_sonchoy_set', 'CompanySodossInfo@masik_sonchoy_setting_store')->name('company_sodosso.masik_sonchoy_setting_store');



	/**
	 *
	 * ajax portion
	 *
	 */
	

	Route::post('/get_all_data_about_specified_user', 'Daily_entry_controller@Get_all_data_about_specified_user')->name('ajax_data.fetch_user_data');


/*=====  End of company portion  ======*/

	





/*=======================================
=            user pages            =
=======================================*/

	/**
	 *
	 * sodosso biboron
	 *
	 */
	
	Route::get('/user_info', 'User_details@Index')->name('user.info_details');

	Route::get('/user_info_update', 'User_details@Update_page')->name('user.info_details_update');
	Route::post('/user_info_update', 'User_details@Update_page_store')->name('user.info_details_update_store');


	/**
	 *
	 * sheyar
	 *
	 */
	
	Route::get('/user_sheyar_all' , 'User_details@Sheyar_all')->name('user.Sheyar_all');
	Route::get('/user_sheyar_buy' , 'User_details@Sheyar_kroy')->name('user.Sheyar_kroy');
	Route::get('/user_sheyar_sell' , 'User_details@Sheyar_sell')->name('user.Sheyar_sell');



	/**
	 *
	 * sonchoy
	 *
	 */
	
	/* sonchoy biboron */
	Route::get('user_sonchoy_biboron', 'User_details@SonchoyBiboron')->name('user.sonchoy_biboron');

	/* sonchoy uttolon */
	Route::get('user_sonchoy_uttolon', 'User_details@SonchoyUttolon')->name('user.sonchoy_uttolon');




	/**
	 *
	 * loan
	 *
	 */
	
	/* loan uttolon */
	Route::get('user_loan_uttolon', 'User_details@LoanUttolon')->name('user.loan_uttolon');

	/* loan joma */
	Route::get('user_loan_joma', 'User_details@LoanJoma')->name('user.loan_joma');

	/* loan joma */
	Route::get('user_loan_masik_munafa', 'User_details@LoanMasikMunafa')->name('user.loan_masik_munafa');

/*=====  End of user entry page  ======*/





