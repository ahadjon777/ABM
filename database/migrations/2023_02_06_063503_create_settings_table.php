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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->string('site_status');
            $table->string('site_name');
            $table->string('status_mess');
            $table->text('site_info');
            $table->string('logo');
            $table->string('name');
            $table->string('company_name');
            $table->string('email');
            $table->bigInteger('phone_number');
            $table->text('message');
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
        Schema::dropIfExists('settings');
    }
};
