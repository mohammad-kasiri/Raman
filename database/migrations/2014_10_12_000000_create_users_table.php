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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('level'  , ['admin' , 'doctor' , 'patient'])->default('patient');
            $table->enum('gender' , ['male' , 'female'])->nullable();
            $table->string('first_name' , 15)->nullable();
            $table->string('last_name'  , 25)->nullable();
            $table->string('avatar'     , 30)->nullable();

            $table->string('mobile' , 13)->unique();
            $table->string('email'  , 50)->unique()->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->timestamp('last_login')->nullable();

            $table->string('password' , 100)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
