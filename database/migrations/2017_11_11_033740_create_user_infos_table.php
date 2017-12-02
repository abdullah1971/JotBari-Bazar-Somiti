<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('membership_no');
            $table->string('user_father_name')->nullable($value = true);
            $table->string('user_mother_name')->nullable($value = true);
            $table->string('user_husbandORwife_name')->nullable($value = true);
            $table->string('present_address')->nullable($value = true);
            $table->string('permanent_address')->nullable($value = true);
            $table->string('mobile_no')->nullable($value = true);
            $table->string('image_path')->nullable($value = true);
            $table->string('nominee_name')->nullable($value = true);
            $table->string('nominee_relation')->nullable($value = true);
            $table->string('date_of_being_user')->nullable($value = true);
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
        Schema::dropIfExists('user_infos');
    }
}
