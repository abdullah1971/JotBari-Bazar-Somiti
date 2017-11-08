<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('closing_id');
            
            $table->bigInteger('sheyar_amount');

            $table->bigInteger('sonchoy_income_amount');
            $table->bigInteger('sonchoy_giving_amount');

            $table->bigInteger('loan_giving_amount');
            $table->bigInteger('loan_taking_amount');

            $table->bigInteger('reserve_income_amount');
            $table->bigInteger('reserve_spend_amount');

            $table->bigInteger('loan_munafa_amount');
            $table->bigInteger('loan_munafa_spend_amount');

            $table->string('loan_munafa_extra_type');
            $table->bigInteger('loan_munafa_extra_type_amount');

            $table->bigInteger('taken_from_reserve_amount');
            $table->bigInteger('return_to_reserve_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_accounts');
    }
}
