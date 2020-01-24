<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->date('birthday');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->unsignedBigInteger('gender_id')->index()->nullable();
            $table->unsignedBigInteger('userType_id')->index()->nullable();
            $table->unsignedBigInteger('address_id')->index()->nullable();
            $table->unsignedBigInteger('state_id')->index()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();


        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('userType_id')->references('id')->on('user_types');
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
        Schema::dropIfExists('users');
    }
}
