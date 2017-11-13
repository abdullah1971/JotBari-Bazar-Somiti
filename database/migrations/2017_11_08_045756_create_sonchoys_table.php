<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSonchoysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sonchoys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('info_type');
            $table->bigInteger('money_amount');
            $table->bigInteger('jorimana_amount')->nullable($value = true);
            $table->bigInteger('total_amount')->nullable($value = true);
            $table->bigInteger('current_month_sonchoy');
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
        Schema::dropIfExists('sonchoys');
    }
}
