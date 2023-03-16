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
        Schema::create('compyuters', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('seria_name')->nullable();
            $table->string('qmd_model')->nullable();
            $table->string('qmd_seria')->nullable();
            $table->string('ssd_number')->nullable();
            $table->string('ssd_model')->nullable();
            $table->string('monitor_number')->nullable();
            $table->string('monitor_model')->nullable();
            $table->date('ishlangan_sana')->nullable();
            $table->date('hisob_sana')->nullable();
            $table->date('olindi')->nullable();
            $table->date('topshirdi')->nullable();
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
        Schema::dropIfExists('compyuters');
    }
};
