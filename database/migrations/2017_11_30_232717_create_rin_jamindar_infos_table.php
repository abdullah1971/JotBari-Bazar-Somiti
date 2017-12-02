<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRinJamindarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rin_jamindar_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('jamindar_ovivabok_name');
            $table->string('jamindar_ovivabok_father_name');
            $table->string('jamindar_ovivabok_address');
            $table->string('jamindar_ovivabok_mobile_no');
            $table->string('jamindar_sodosso_id');
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
        Schema::dropIfExists('rin_jamindar_infos');
    }
}
