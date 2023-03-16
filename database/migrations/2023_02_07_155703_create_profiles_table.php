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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
//            $table->string('email');
            $table->bigInteger('ph_number')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('time_zone')->nullable()->nullable();
            $table->string('last_name')->nullable();
            $table->string('organization')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('language')->nullable()->nullable();
            $table->string('currency')->nullable()->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
