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
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('device' , 20)->nullable();
            $table->string('browser', 20)->nullable();
            $table->string('platform', 20)->nullable();
            $table->string('ip_address' ,15);
            $table->string('city' , 40)->nullable();
            $table->string('country' , 40)->nullable();
            $table->string('isp' , 40)->nullable();
            $table->string('timezone' , 40)->nullable();
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
        Schema::dropIfExists('user_sessions');
    }
};
