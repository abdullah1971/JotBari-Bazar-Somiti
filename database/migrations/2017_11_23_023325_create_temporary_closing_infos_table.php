<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporaryClosingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_closing_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('closing_date');
            $table->bigInteger('total_sheyar');
            $table->bigInteger('total_sonchoy');
            $table->bigInteger('member_amount');
            $table->bigInteger('munafa_theke_income');
            $table->bigInteger('munafa_theke_spend');
            $table->bigInteger('rin_khelapi_amount');
            $table->double('percentage', 8, 2);
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
        Schema::dropIfExists('temporary_closing_infos');
    }
}
