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
		


