<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->date('startDate');
            $table->date('endDate');
            $table->dateTime('sendingPeriod');
            $table->bigInteger('limit');
            $table->string('qrCode');
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('perimeter_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
        });
        Schema::table('promotions', function (Blueprint $table) {
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('status_id')->references('id')->on('promotion_status');
            $table->foreign('perimeter_id')->references('id')->on('promotion_perimeters');
            $table->foreign('type_id')->references('id')->on('promotion_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
