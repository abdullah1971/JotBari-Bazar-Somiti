$(document).ready(function() {
	

	$(document).on('scroll', function() {

	  value = $(window).scrollTop();
	  
	  // console.log(value);

	  if(value > 150){

	  	$("#navigation_bar").css('margin-top', 0);

	  }
	  else if(value <= 150){

	  	var temp = 150 - value;

	  	$("#navigation_bar").css('margin-top', temp);
	  }

	});


	// $("#daily_catagory_select").on('click', function() {
		
		
	// 	var temp = $("#daily_catagory_select").val();

	// 	console.log(temp);

	// 	if (temp == "শেয়ার") {

	// 		$("#temp").attr('display', 'unset');
	// 	}
	// });








	/*----------  daily main catagory select's input  ----------*/


	/**
	 *
	 * here bibidh means reserve
	 *
	 */
	
	

	$("#daily_catagory_select").change(function() {
		

		// console.log($("#daily_catagory_select").val());

		var daily_catagory_select = $("#daily_catagory_select").val();

		if(daily_catagory_select === "sheyar"){

			// console.log("sdfdf");

			

			/*----------  add remove_item class  ----------*/
			
			/* sonchoy portion */
			$("#sonchoy_subCatagory").addClass('remove_item');
			$("#sonchoy_masik_joma").addClass('remove_item');
			$("#sonchoy_masik_jorimana").addClass('remove_item');
			$("#sonchoy_masik_jorimana_char").addClass('remove_item');
			$("#sonchoy_net_amount").addClass('remove_item');
			$("#sonchoy_uttolon_amount").addClass('remove_item');
			$("#sonchoy_net_masik_joma").addClass('remove_item');
			$("#sonchoy_ogrim_joma_month").addClass('remove_item');
			$("#sonchoy_ogrim_joma_amount").addClass('remove_item');

			/* loan portion */
			$("#loan_subCatagory").addClass('remove_item');
			$("#loan_max_possible_amount").addClass('remove_item');
			$("#loan_giving_amount").addClass('remove_item');

			$("#loan_total_haveTo_pay").addClass('remove_item');
			$("#loan_now_pay").addClass('remove_item');
			$("#loan_remaining_pay").addClass('remove_item');

			$("#loan_masik_munafa_joma").addClass('remove_item');
			$("#loan_masik_jorimana").addClass('remove_item');
			$("#loan_masik_jorimana_char").addClass('remove_item');
			$("#loan_net_masik_joma").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');



			/*----------  remove remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sheyar_subCatagory").removeClass('remove_item');
			$("#number_of_sheyar").removeClass('remove_item');
			$("#sheyar_amount_in_money").removeClass('remove_item');

			


		}
		else if(daily_catagory_select === "sonchoy"){

			/*----------  add remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sheyar_subCatagory").addClass('remove_item');
			$("#number_of_sheyar").addClass('remove_item');
			$("#sheyar_amount_in_money").addClass('remove_item');
			$("#from_sovvo_sodosso_number").addClass('remove_item');
			$("#to_sovvo_sodosso_number").addClass('remove_item');
			$("#net_number_of_sheyar").addClass('remove_item');
			$("#selling_amount_of_sheyar").addClass('remove_item');


			/* loan portion */
			$("#loan_subCatagory").addClass('remove_item');
			$("#loan_max_possible_amount").addClass('remove_item');
			$("#loan_giving_amount").addClass('remove_item');
			
			$("#loan_total_haveTo_pay").addClass('remove_item');
			$("#loan_now_pay").addClass('remove_item');
			$("#loan_remaining_pay").addClass('remove_item');

			$("#loan_masik_munafa_joma").addClass('remove_item');
			$("#loan_masik_jorimana").addClass('remove_item');
			$("#loan_masik_jorimana_char").addClass('remove_item');
			$("#loan_net_masik_joma").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');



			/*----------  remove remove_item class  ----------*/

			/* sheyar portion */
			$("#sovvo_sodosso_number").removeClass('remove_item');

			
			/* sonchoy portion */
			$("#sonchoy_subCatagory").removeClass('remove_item');
			$("#sonchoy_masik_joma").removeClass('remove_item');
			$("#sonchoy_masik_jorimana").removeClass('remove_item');
			$("#sonchoy_masik_jorimana_char").removeClass('remove_item');
			$("#sonchoy_net_masik_joma").removeClass('remove_item');
			


		}
		else if (daily_catagory_select === "loan") {

			/*----------  add remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sheyar_subCatagory").addClass('remove_item');
			$("#number_of_sheyar").addClass('remove_item');
			$("#sheyar_amount_in_money").addClass('remove_item');
			$("#from_sovvo_sodosso_number").addClass('remove_item');
			$("#to_sovvo_sodosso_number").addClass('remove_item');
			$("#net_number_of_sheyar").addClass('remove_item');
			$("#selling_amount_of_sheyar").addClass('remove_item');


			/* sonchoy portion */
			$("#sonchoy_subCatagory").addClass('remove_item');
			$("#sonchoy_masik_joma").addClass('remove_item');
			$("#sonchoy_masik_jorimana").addClass('remove_item');
			$("#sonchoy_masik_jorimana_char").addClass('remove_item');
			$("#sonchoy_net_masik_joma").addClass('remove_item');
			$("#sonchoy_net_amount").addClass('remove_item');
			$("#sonchoy_uttolon_amount").addClass('remove_item');
			$("#sonchoy_ogrim_joma_month").addClass('remove_item');
			$("#sonchoy_ogrim_joma_amount").addClass('remove_item');

			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');



			/*----------  remove remove_item class  ----------*/

			/* sheyar portion */
			$("#sovvo_sodosso_number").removeClass('remove_item');

			
			/* loan portion */
			$("#loan_subCatagory").removeClass('remove_item');
			$("#number_of_sheyar").removeClass('remove_item');
			$("#loan_max_possible_amount").removeClass('remove_item');
			$("#loan_giving_amount").removeClass('remove_item');
	
		}
		else if (daily_catagory_select === "bibidh") {


			/*----------  add remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sheyar_subCatagory").addClass('remove_item');
			$("#number_of_sheyar").addClass('remove_item');
			$("#sheyar_amount_in_money").addClass('remove_item');
			$("#sovvo_sodosso_number").addClass('remove_item');
			$("#from_sovvo_sodosso_number").addClass('remove_item');
			$("#to_sovvo_sodosso_number").addClass('remove_item');
			$("#net_number_of_sheyar").addClass('remove_item');
			$("#selling_amount_of_sheyar").addClass('remove_item');


			/* sonchoy portion */
			$("#sonchoy_subCatagory").addClass('remove_item');
			$("#sonchoy_masik_joma").addClass('remove_item');
			$("#sonchoy_masik_jorimana").addClass('remove_item');
			$("#sonchoy_masik_jorimana_char").addClass('remove_item');
			$("#sonchoy_net_masik_joma").addClass('remove_item');
			$("#sonchoy_net_amount").addClass('remove_item');
			$("#sonchoy_uttolon_amount").addClass('remove_item');
			$("#sonchoy_ogrim_joma_month").addClass('remove_item');
			$("#sonchoy_ogrim_joma_amount").addClass('remove_item');


			/* loan portion */
			$("#loan_subCatagory").addClass('remove_item');
			$("#loan_max_possible_amount").addClass('remove_item');
			$("#loan_giving_amount").addClass('remove_item');

			$("#loan_total_haveTo_pay").addClass('remove_item');
			$("#loan_now_pay").addClass('remove_item');
			$("#loan_remaining_pay").addClass('remove_item');

			$("#loan_masik_munafa_joma").addClass('remove_item');
			$("#loan_masik_jorimana").addClass('remove_item');
			$("#loan_masik_jorimana_char").addClass('remove_item');
			$("#loan_net_masik_joma").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');
			



			/*----------  remove remove_item class  ----------*/

			
			/* bibidh portion */
			$("#bibidh_subCatagory").removeClass('remove_item');
			$("#bibidh_uddesso").removeClass('remove_item');
			$("#bibidh_money_amount").removeClass('remove_item');
			
		}
		else if(daily_catagory_select === "munafa_theke_khoroch") {



			/*----------  add remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sheyar_subCatagory").addClass('remove_item');
			$("#number_of_sheyar").addClass('remove_item');
			$("#sheyar_amount_in_money").addClass('remove_item');
			$("#sovvo_sodosso_number").addClass('remove_item');
			$("#from_sovvo_sodosso_number").addClass('remove_item');
			$("#to_sovvo_sodosso_number").addClass('remove_item');
			$("#net_number_of_sheyar").addClass('remove_item');
			$("#selling_amount_of_sheyar").addClass('remove_item');


			/* sonchoy portion */
			$("#sonchoy_subCatagory").addClass('remove_item');
			$("#sonchoy_masik_joma").addClass('remove_item');
			$("#sonchoy_masik_jorimana").addClass('remove_item');
			$("#sonchoy_masik_jorimana_char").addClass('remove_item');
			$("#sonchoy_net_masik_joma").addClass('remove_item');
			$("#sonchoy_net_amount").addClass('remove_item');
			$("#sonchoy_uttolon_amount").addClass('remove_item');
			$("#sonchoy_ogrim_joma_month").addClass('remove_item');
			$("#sonchoy_ogrim_joma_amount").addClass('remove_item');


			/* loan portion */
			$("#loan_subCatagory").addClass('remove_item');
			$("#loan_max_possible_amount").addClass('remove_item');
			$("#loan_giving_amount").addClass('remove_item');

			$("#loan_total_haveTo_pay").addClass('remove_item');
			$("#loan_now_pay").addClass('remove_item');
			$("#loan_remaining_pay").addClass('remove_item');

			$("#loan_masik_munafa_joma").addClass('remove_item');
			$("#loan_masik_jorimana").addClass('remove_item');
			$("#loan_masik_jorimana_char").addClass('remove_item');
			$("#loan_net_masik_joma").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');
			



			/*----------  remove remove_item class  ----------*/

			
			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").removeClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").removeClass('remove_item');
			// $("#bibidh_money_amount").removeClass('remove_item');
		}

	});


	/*=============================================================================
	=            sheyar portion ( except sheyar main catagory select )            =
	===============================================================================*/
	
		/*----------  daily sheyar subcatagory select's input  ----------*/
		
		$("#sheyar_subCatagory_input").change(function() {
			
			var sheyar_subCatagory_val = $("#sheyar_subCatagory_input").val();

			if (sheyar_subCatagory_val === "buy") {

				/* remove  remove_item class */
				$("#sovvo_sodosso_number").removeClass('remove_item');

				/* add remove_item class */
				$("#from_sovvo_sodosso_number").addClass('remove_item');
				$("#to_sovvo_sodosso_number").addClass('remove_item');
				$("#net_number_of_sheyar").addClass('remove_item');
				$("#selling_amount_of_sheyar").addClass('remove_item');
			}
			else if (sheyar_subCatagory_val === "sell") {

				/* remove  remove_item class */
				$("#from_sovvo_sodosso_number").removeClass('remove_item');
				$("#to_sovvo_sodosso_number").removeClass('remove_item');
				$("#net_number_of_sheyar").removeClass('remove_item');
				$("#selling_amount_of_sheyar").removeClass('remove_item');

				/* add remove_item class */
				$("#sovvo_sodosso_number").addClass('remove_item');
				$("#number_of_sheyar").addClass('remove_item');
			}
		});




		/*----------  sheyar money amount calculation  ----------*/
		
		$("#number_of_sheyar_input").change(function() {
			

			var sheyar_amount = $("#number_of_sheyar_input").val();

			var sheyar_money_amount = sheyar_amount * 100;
			// sheyar_money_amount = sheyar_money_amount + "  টাকা ";

			$("#sheyar_amount_in_money_input").val(sheyar_money_amount);

		});


		$("#selling_amount_of_sheyar_input").change(function() {
			

			var sheyar_amount = $("#selling_amount_of_sheyar_input").val();

			var sheyar_money_amount = sheyar_amount * 100;
			// sheyar_money_amount = sheyar_money_amount + "  টাকা ";

			$("#sheyar_amount_in_money_input").val(sheyar_money_amount);

		});



	
	
	/*=====  End of sheyar portion ( except sheyar main catagory select )  ======*/
	


	/*=============================================================================
	=            sonchoy portion (except sonchoy main catagory select)            =
	===============================================================================*/
	
		/*----------  sonchoy subcatagory select  ----------*/
		$("#sonchoy_subCatagory_input").change(function() {
			

			var sonchoy_subCatagory = $("#sonchoy_subCatagory_input").val();

			console.log(sonchoy_subCatagory);

			if(sonchoy_subCatagory === "sonchoy_masik_joma"){

				/* add remove_item class */
				$("#sonchoy_net_amount").addClass('remove_item');
				$("#sonchoy_uttolon_amount").addClass('remove_item');
				$("#sonchoy_ogrim_joma_month").addClass('remove_item');
				$("#sonchoy_ogrim_joma_amount").addClass('remove_item');

				/* remove remvoe_item class */
				$("#sonchoy_masik_joma").removeClass('remove_item');
				$("#sonchoy_masik_jorimana").removeClass('remove_item');
				$("#sonchoy_masik_jorimana_char").removeClass('remove_item');
				$("#sonchoy_net_masik_joma").removeClass('remove_item');
			}
			else if (sonchoy_subCatagory === "sonchoy_masik_joma_advanced") {


				/* add remove_item class */
				$("#sonchoy_net_amount").addClass('remove_item');
				$("#sonchoy_uttolon_amount").addClass('remove_item');
				$("#sonchoy_masik_joma").addClass('remove_item');
				$("#sonchoy_masik_jorimana").addClass('remove_item');
				$("#sonchoy_masik_jorimana_char").addClass('remove_item');
				$("#sonchoy_net_masik_joma").addClass('remove_item');

				/* remove remvoe_item class */
				$("#sonchoy_ogrim_joma_month").removeClass('remove_item');
				$("#sonchoy_ogrim_joma_amount").removeClass('remove_item');
				

			}
			else if (sonchoy_subCatagory === "sonchoy_uttolon") {

				/* add remvoe_item class */
				$("#sonchoy_masik_joma").addClass('remove_item');
				$("#sonchoy_masik_jorimana").addClass('remove_item');
				$("#sonchoy_masik_jorimana_char").addClass('remove_item');
				$("#sonchoy_net_masik_joma").addClass('remove_item');
				$("#sonchoy_ogrim_joma_month").addClass('remove_item');
				$("#sonchoy_ogrim_joma_amount").addClass('remove_item');


				/* remove remove_item class */
				$("#sonchoy_net_amount").removeClass('remove_item');
				$("#sonchoy_uttolon_amount").removeClass('remove_item');
				

			}

		});
	
	
	/*=====  End of sonchoy portion (except sonchoy main catagory select)  ======*/



	/*====================================================================
	=            loan portion ( except main catagory select )            =
	=====================================================================*/
	
		/*----------  sonchoy subcatagory select  ----------*/
		$("#loan_subCatagory_input").change(function() {
			

			var loan_subCatagory = $("#loan_subCatagory_input").val();

			console.log(sonchoy_subCatagory);

			if(loan_subCatagory === "loan_bitoron"){

				/* add remove_item class */
				$("#loan_total_haveTo_pay").addClass('remove_item');
				$("#loan_now_pay").addClass('remove_item');
				$("#loan_remaining_pay").addClass('remove_item');

				$("#loan_masik_munafa_joma").addClass('remove_item');
				$("#loan_masik_jorimana").addClass('remove_item');
				$("#loan_masik_jorimana_char").addClass('remove_item');
				$("#loan_net_masik_joma").addClass('remove_item');

				/* remove remvoe_item class */
				$("#number_of_sheyar").removeClass('remove_item');
				$("#loan_max_possible_amount").removeClass('remove_item');
				$("#loan_giving_amount").removeClass('remove_item');
				
			}
			else if (loan_subCatagory === "loan_joma") {

				/* add remvoe_item class */
				$("#loan_masik_munafa_joma").addClass('remove_item');
				$("#loan_masik_jorimana").addClass('remove_item');
				$("#loan_masik_jorimana_char").addClass('remove_item');
				$("#loan_net_masik_joma").addClass('remove_item');
				$("#number_of_sheyar").addClass('remove_item');
				$("#loan_max_possible_amount").addClass('remove_item');
				$("#loan_giving_amount").addClass('remove_item');

				/* remove remove_item class */
				$("#loan_total_haveTo_pay").removeClass('remove_item');
				$("#loan_now_pay").removeClass('remove_item');
				$("#loan_remaining_pay").removeClass('remove_item');

			}
			else if (loan_subCatagory === "loan_masik_munafa") {

				/* add remvoe_item class */
				$("#number_of_sheyar").addClass('remove_item');
				$("#loan_max_possible_amount").addClass('remove_item');
				$("#loan_giving_amount").addClass('remove_item');
				
				$("#loan_total_haveTo_pay").addClass('remove_item');
				$("#loan_now_pay").addClass('remove_item');
				$("#loan_remaining_pay").addClass('remove_item');

				/* remove remove_item class */
				$("#loan_masik_munafa_joma").removeClass('remove_item');
				$("#loan_masik_jorimana").removeClass('remove_item');
				$("#loan_masik_jorimana_char").removeClass('remove_item');
				$("#loan_net_masik_joma").removeClass('remove_item');

			}

		});
	
	/*=====  End of loan portion ( except main catagory select )  ======*/



	/*============================================================
	=            fetching data by using ajax + jquery            =
	============================================================*/
	
		/* by using sovvo sodosso number */
		
		$('#sovvo_sodosso_number_input').keyup(function() {
			
			var sovvo_sodosso_number = $('#sovvo_sodosso_number_input').val();
			var _token = $("input[name='_token']").val();

			// console.log($('#sovvo_sodosso_number_input').val());


			$.ajax({

				url: '/get_all_data_about_specified_user',
				type: 'POST',
				data: {_token:_token, sovvo_sodosso_number: sovvo_sodosso_number},

			})
			.done(function(data) {

				console.log(data.user_info.sheyar);

				/* number of sheyar */
				$("#number_of_sheyar_input").val(data.user_info.sheyar);


				//  sheyar_amount_in_money 
				// $("#sheyar_amount_in_money_input").val(data.user_info.sheyar * 100);




				/* sonchoy_masik_joma */
				$("#sonchoy_masik_joma_input").val(data.user_info.fixed_sonchoy);

				/* sonchoy_net_amount */
				$("#sonchoy_net_amount_input").val(data.user_info.net_sonchoy);


				/* loan_max_possible_amount */
				$("#loan_max_possible_amount_input").val(data.user_info.sheyar * 4000 - data.user_info.taken_loan_amount + data.user_info.paid_loan_amount);

				/* net loan amount */
				$("#loan_total_haveTo_pay_input").val(data.user_info.taken_loan_amount - data.user_info.paid_loan_amount);


				/* update loan table */
				// $("#loan_modal_table").empty();
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			

		});



		/* by using je hostantor korse */
		
		$('#from_sovvo_sodosso_number_input').keyup(function() {
			
			var sovvo_sodosso_number = $('#from_sovvo_sodosso_number_input').val();
			var _token = $("input[name='_token']").val();

			$.ajax({

				url: '/get_all_data_about_specified_user',
				type: 'POST',
				data: {_token:_token, sovvo_sodosso_number: sovvo_sodosso_number},

			})
			.done(function(data) {

				/* number of sheyar */
				$("#net_number_of_sheyar_input").val(data.user_info.sheyar);


				
			})
			
			

		});

	
	/*=====  End of fetching data by using ajax + jquery  ======*/
		
	
	
	


});