<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('address' , 180)->nullable();
            $table->string('career' , 30)->nullable();
            $table->string('marital_status' , 40)->nullable();
            $table->string('degree' , 40)->nullable();
            $table->string('study_field' , 40)->nullable();
            $table->timestamp('birthdate')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
