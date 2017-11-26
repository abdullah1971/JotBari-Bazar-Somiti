<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closing_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('closing_date');
            $table->string('month_info');
            $table->bigInteger('sonchoy_aday');
            $table->bigInteger('munafa_aday');
            $table->bigInteger('sheyar_aday');
            $table->bigInteger('reserve_aday');
            $table->bigInteger('vobon_theke_aday');
            $table->bigInteger('rin_aday');
            $table->bigInteger('mot_aday');
            $table->bigInteger('sonchoy_ferot');
            $table->bigInteger('bibidh_khoroch');
            $table->bigInteger('vobon')->nullable($value = true);
            $table->bigInteger('mrrittukalin_onudan');
            $table->bigInteger('rin_prodan');
            $table->bigInteger('mot_khoroch');
            $table->double('actual_percentage', 8, 2)->nullable($value = true);
            $table->double('final_percentage', 8, 2)->nullable($value = true);
            $table->string('reserve_condition')->nullable($value = true);
            $table->bigInteger('money_taken_or_given_amount_to_reserve')->nullable($value = true);
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
        Schema::dropIfExists('closing_infos');
    }
}
