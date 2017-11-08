<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id");
            $table->bigInteger('sheyar');
            $table->bigInteger('fixed_sonchoy')->nullable($value = true);
            $table->bigInteger('net_sonchoy')->nullable($value = true);
            $table->bigInteger('taken_loan_amount')->nullable($value = true);
            $table->bigInteger('paid_loan_amount')->nullable($value = true);
            $table->string('account_status')->nullable($value = true);
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
        Schema::dropIfExists('user_accounts');
    }
}
