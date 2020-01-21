<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('corporateName');
            $table->string('description');
            $table->string('image');
            $table->bigInteger('phone');
            $table->time('startHours');
            $table->time('endHours');
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('address_id')->index();
            $table->unsignedBigInteger('state_id')->index();
            $table->timestamps();


        });
        Schema::table('shops', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
