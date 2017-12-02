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
			// $("#sonchoy_ogrim_joma_month").addClass('remove_item');
			// $("#sonchoy_ogrim_joma_amount").addClass('remove_item');
			$("#sonchoy_joma_date").addClass('remove_item');

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

			$("#loan_joma_date").addClass('remove_item');
			$("#loan_masik_munafa_joma_date").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');
			$("#bibidh_ay_option").addClass('remove_item');
			$("#bibidh_biboron").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');



			/*----------  remove remove_item class  ----------*/
			
			/* sheyar portion */
			$("#sovvo_sodosso_number").removeClass('remove_item');
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

			$("#loan_joma_date").addClass('remove_item');
			$("#loan_masik_munafa_joma_date").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');
			$("#bibidh_ay_option").addClass('remove_item');
			$("#bibidh_biboron").addClass('remove_item');


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
			$("#sonchoy_joma_date").removeClass('remove_item');
			


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
			// $("#sonchoy_ogrim_joma_month").addClass('remove_item');
			// $("#sonchoy_ogrim_joma_amount").addClass('remove_item');
			$("#sonchoy_joma_date").addClass('remove_item');

			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');
			$("#bibidh_ay_option").addClass('remove_item');
			$("#bibidh_biboron").addClass('remove_item');


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
			// $("#sonchoy_ogrim_joma_month").addClass('remove_item');
			// $("#sonchoy_ogrim_joma_amount").addClass('remove_item');
			$("#sonchoy_joma_date").addClass('remove_item');


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

			$("#loan_joma_date").addClass('remove_item');
			$("#loan_masik_munafa_joma_date").addClass('remove_item');


			/* munafa theke khoroch portion */
			$("#munafa_theke_khoroch_uddesso").addClass('remove_item');
			$("#munafa_theke_khoroch_money_amount").addClass('remove_item');
			



			/*----------  remove remove_item class  ----------*/

			
			/* bibidh portion */
			$("#bibidh_subCatagory").removeClass('remove_item');
			// $("#bibidh_uddesso").removeClass('remove_item');
			$("#bibidh_money_amount").removeClass('remove_item');
			$("#bibidh_ay_option").removeClass('remove_item');
			// $("#bibidh_biboron").removeClass('remove_item');
			
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
			// $("#sonchoy_ogrim_joma_month").addClass('remove_item');
			// $("#sonchoy_ogrim_joma_amount").addClass('remove_item');
			$("#sonchoy_joma_date").addClass('remove_item');


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

			$("#loan_joma_date").addClass('remove_item');
			$("#loan_masik_munafa_joma_date").addClass('remove_item');


			/* bibidh portion */
			$("#bibidh_subCatagory").addClass('remove_item');
			$("#bibidh_uddesso").addClass('remove_item');
			$("#bibidh_money_amount").addClass('remove_item');
			$("#bibidh_ay_option").addClass('remove_item');
			$("#bibidh_biboron").addClass('remove_item');
			



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
				$("#sonchoy_joma_date").removeClass('remove_item');
			}
			else if (sonchoy_subCatagory === "sonchoy_masik_joma_advanced") {


				// /* add remove_item class */
				// $("#sonchoy_net_amount").addClass('remove_item');
				// $("#sonchoy_uttolon_amount").addClass('remove_item');
				// $("#sonchoy_masik_joma").addClass('remove_item');
				// $("#sonchoy_masik_jorimana").addClass('remove_item');
				// $("#sonchoy_masik_jorimana_char").addClass('remove_item');
				// $("#sonchoy_net_masik_joma").addClass('remove_item');

				// /* remove remvoe_item class */
				// $("#sonchoy_ogrim_joma_month").removeClass('remove_item');
				// $("#sonchoy_ogrim_joma_amount").removeClass('remove_item');
				

			}
			else if (sonchoy_subCatagory === "sonchoy_uttolon") {

				/* add remvoe_item class */
				$("#sonchoy_masik_joma").addClass('remove_item');
				$("#sonchoy_masik_jorimana").addClass('remove_item');
				$("#sonchoy_masik_jorimana_char").addClass('remove_item');
				$("#sonchoy_net_masik_joma").addClass('remove_item');
				$("#sonchoy_ogrim_joma_month").addClass('remove_item');
				$("#sonchoy_ogrim_joma_amount").addClass('remove_item');
				$("#sonchoy_joma_date").addClass('remove_item');


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

				$("#loan_joma_date").addClass('remove_item');
				$("#loan_masik_munafa_joma_date").addClass('remove_item');

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

				// $("#loan_joma_date").addClass('remove_item');
				$("#loan_masik_munafa_joma_date").addClass('remove_item');

				/* remove remove_item class */
				$("#loan_total_haveTo_pay").removeClass('remove_item');
				$("#loan_now_pay").removeClass('remove_item');
				$("#loan_remaining_pay").removeClass('remove_item');

				$("#loan_joma_date").removeClass('remove_item');

			}
			else if (loan_subCatagory === "loan_masik_munafa") {

				/* add remvoe_item class */
				$("#number_of_sheyar").addClass('remove_item');
				$("#loan_max_possible_amount").addClass('remove_item');
				$("#loan_giving_amount").addClass('remove_item');
				
				$("#loan_total_haveTo_pay").addClass('remove_item');
				$("#loan_now_pay").addClass('remove_item');
				$("#loan_remaining_pay").addClass('remove_item');

				$("#loan_joma_date").addClass('remove_item');
				// $("#loan_masik_munafa_joma_date").addClass('remove_item');

				/* remove remove_item class */
				$("#loan_masik_munafa_joma").removeClass('remove_item');
				$("#loan_masik_jorimana").removeClass('remove_item');
				$("#loan_masik_jorimana_char").removeClass('remove_item');
				$("#loan_net_masik_joma").removeClass('remove_item');
				
				$("#loan_masik_munafa_joma_date").removeClass('remove_item');

			}

		});
	
	/*=====  End of loan portion ( except main catagory select )  ======*/



	/*=====================================================================
	=            bibidh portion ( except main catagory select)            =
	=====================================================================*/
	
		$("#bibidh_subCatagory_input").change(function() {
			
			var bibidh_subCatagory = $("#bibidh_subCatagory_input").val();

			console.log(bibidh_subCatagory);


			if (bibidh_subCatagory == "income") {

				/* add remvoe_item class */
				$("#bibidh_uddesso").addClass('remove_item');
				$("#bibidh_biboron").addClass('remove_item');
				

				/* remove remove_item class */
				$("#bibidh_ay_option").removeClass('remove_item');
				
				
			}

			else if (bibidh_subCatagory == "spent") {

				/* add remvoe_item class */
				$("#bibidh_ay_option").addClass('remove_item');
				$("#bibidh_biboron").addClass('remove_item');
				

				/* remove remove_item class */
				$("#bibidh_uddesso").removeClass('remove_item');
			}
		});



		$("#bibidh_ay_option_input").change(function() {
			
			var bibidh_ay_option = $("#bibidh_ay_option_input").val();
			// console.log($("#bibidh_ay_option_input").val());

			if(bibidh_ay_option == "others"){

				$("#bibidh_biboron").removeClass('remove_item');
			}
			else {

				$("#bibidh_biboron").addClass('remove_item');
			}
		});
	
	
	/*=====  End of bibidh portion ( except main catagory select)  ======*/
	


	/*=====================================================
	=            daily entry input calculation            =
	=====================================================*/
	
		$("#sonchoy_net_masik_joma_input").keyup(function() {
			
			var net_joma = parseInt($("#sonchoy_masik_jorimana_input").val()) + parseInt($("#sonchoy_masik_joma_input").val());

			$("#sonchoy_net_masik_joma_input").val(net_joma);
		});


		$("#loan_now_pay_input").keyup(function() {
			
			var need_to_pay = parseInt($("#loan_total_haveTo_pay_input").val()) - parseInt($("#loan_now_pay_input").val());

			$("#loan_remaining_pay_input").val(need_to_pay);
		});


		$("#loan_net_masik_joma_input").keyup(function() {
			
			var net_joma = parseInt($("#loan_masik_munafa_joma_input").val()) + parseInt($("#loan_masik_jorimana_input").val());

			$("#loan_net_masik_joma_input").val(net_joma);
		});
	
	/*=====  End of daily entry input calculation  ======*/
	



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

				// console.log(data.sonchoy);

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
				$("#loan_modal_table").empty();
				var loan_info = data.loan_uttolon + "<br>" + data.loan_joma + "<br>" + data.loan_masik_munafa;
				$("#loan_modal_table").html(loan_info);

				console.log(loan_info);


				/* update sonchoy table (within closing) */
				$("#sonchoy_modal_table").empty();
				$("#sonchoy_modal_table").html(data.sonchoy);
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
		
	
	
	
	/*============================================================================
	=            fetching data for company member page by using ajax             =
	============================================================================*/
	
		$("#company_member_page_sovvo_sodosso_number_input").keyup(function() {
			

			var user_number = $("#company_member_page_sovvo_sodosso_number_input").val();

			var token = $("input[name='_token']").val();

			$.ajax({


				url: '/company_user_info',
				type: 'POST',
				// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {_token: token, user_number: user_number},

			})
			.done(function(data) {




				/**
				 *
				 * first clear all field 
				 *
				 */
				
				/* for sodosso info page */
				
				$("#member_no").text();
				$("#member_name").text();

				$("#member_account_status").text();
				$("#member_sheyar").text();
				$("#member_fixed_sonchoy").text();
				$("#member_net_sonchoy").text();
				$("#member_net_loan").text();

				$("#member_father_name").text();
				$("#member_mother_name").text();
				$("#member_husbandORwife_name").text();
				$("#member_present_address").text();
				$("#member_permanent_address").text();
				$("#member_mobile_no").text();
				$("#member_date_of_being_user").text();
				$("#member_image").empty();	
				$("#nominee_name_input").empty();	
				$("#nominee_relation_input").empty();	
				$("#sonchoy_monthly_fix_amount_input").val("");	

				/* for sodosso info update page */
				
				$("#user_name_input").val("");
				$("#user_father_name_input").val("");
				$("#user_mother_name_input").val("");
				$("#user_husbandORwife_name_input").val("");
				$("#present_address_input").val("");
				$("#permanent_address_input").val("");
				$("#mobile_no_input").val();
				// $("#user_image_input").val("");
				$("#date_of_being_user_input").val("");
				$("#user_membership_no").val("");


				/**
				 *
				 * user basic info
				 *
				 */
				

				$("#member_no").text(data.user.membership_no);
				$("#member_name").text(data.user.name);


				/**
				 *
				 * user account info
				 *
				 */
				
				$("#member_account_status").text(data.user_account.account_status);
				$("#member_sheyar").text(data.user_account.sheyar);
				$("#member_fixed_sonchoy").text(data.user_account.fixed_sonchoy);
				$("#member_net_sonchoy").text(data.user_account.net_sonchoy);
				$("#member_net_loan").text(data.user_account.taken_loan_amount - data.user_account.paid_loan_amount);
				$("#sonchoy_monthly_fix_amount_input").val(data.user_account.fixed_sonchoy);



				/**
				 *
				 * user others info
				 *
				 */

				var image_code = '<img src="storage/images/' + data.user_info.image_path + '" alt="">';
				
				$("#member_father_name").text(data.user_info.user_father_name);
				$("#member_mother_name").text(data.user_info.user_mother_name);
				$("#member_husbandORwife_name").text(data.user_info.user_husbandORwife_name);
				$("#member_present_address").text(data.user_info.present_address);
				$("#member_permanent_address").text(data.user_info.permanent_address);
				$("#member_mobile_no").text(data.user_info.mobile_no);
				$("#member_date_of_being_user").text(data.user_info.date_of_being_user);
				$("#member_image").html(image_code);
				$("#nominee_name_input").html(data.user_info.nominee_name);
				$("#nominee_relation_input").html(data.user_info.nominee_relation);


				/**
				 *
				 * user data update page
				 *
				 */
				
				$("#user_name_input").val(data.user.name);
				$("#user_father_name_input").val(data.user_info.user_father_name);
				$("#user_mother_name_input").val(data.user_info.user_mother_name);
				$("#user_husbandORwife_name_input").val(data.user_info.user_husbandORwife_name);
				$("#present_address_input").val(data.user_info.present_address);
				$("#permanent_address_input").val(data.user_info.permanent_address);
				$("#mobile_no_input").val(data.user_info.mobile_no);
				// $("#user_image_input").val();
				$("#date_of_being_user_input").val(data.user_info.date_of_being_user);
				$("#user_membership_no").val(data.user_info.membership_no);
				

				console.log(data.user);
				console.log(data.user_account);
				console.log(data.user_info);

			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	
	/*=====  End of fetching data for company member page by using ajax   ======*/





	/*================================
	=            closing             =
	================================*/
		

		/**
		 *
		 * percentage
		 *
		 */
		
		$("#closing_percentage_input").keyup(function() {
			
			// alert($("#closing_percentage_input").val());

			var percentage = $("#closing_percentage_input").val();
			var token = $("input[name=_token]").val();


			$.ajax({
				url: '/company_percentage_adjustment',
				type: 'POST',
				// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {_token: token, percentage: percentage},
			})
			.done(function(data) {


				if(data.status == "money need"){

					$("#closing_money_taken_from_reserve_info").text(data.money_amount);
					$("#closing_money_given_to_reserve_info").text("0");
				}
				else if(data.status == "money extra"){

					$("#closing_money_taken_from_reserve_info").text("0");
					$("#closing_money_given_to_reserve_info").text(data.money_amount);
				}

				console.log(data.status);
				console.log(data.money_amount);

				// console.log("success");
			})
			
			
		});
	

		/**
		 *
		 * remove rin khelapi
		 *
		 */
		
		// $(".delete_button").on('click', function() {
			

			
		// });

	/*=====  End of closing   ======*/



	/*============================================================
	=            daily entry print and delete portion            =
	============================================================*/
	
		$(".print_button").on('click', function() {
			
			var value = $(this).val();

			var panel = "#panel_" + value;

			$(panel).print();

			console.log(panel);
		});

		$(".confirm").on('click', function() {
			
			if(confirm("নিশ্চিত করুন ")){

				return true;
			}
			else{

				// history.back();
				return false;
			}


		});
	
	/*=====  End of daily entry print and delete portion  ======*/
	
	
	
	/*============================================
	=            report print protion            =
	============================================*/
	
		$("#daily_report_print_button").on('click', function() {
			

			$("#daily_report_table").print();

			console.log(panel);
		});



		$("#masik_report_print_button").on('click', function() {
			

			$("#masik_report").print();

			console.log(panel);
		});



		$("#closing_report_print_button").on('click', function() {
			

			$("#closing_report").print();

			console.log(panel);
		});
	
	/*=====  End of report print protion  ======*/
	

});