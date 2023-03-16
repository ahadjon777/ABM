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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boshqarma_id')->nullable()->constrained('boshqarmas');
            $table->string('qurilma_nomi');
            $table->string('formulyar_raqami');
            $table->string('model');
            $table->string('seria_nomer');
            $table->string('ozu_hajmi')->nullable();
            $table->string('qmd_model')->nullable();
            $table->string('qmd_nomer')->nullable();
            $table->string('ssd_nomer')->nullable();
            $table->string('ssd_model')->nullable();
            $table->string('monitor1_model')->nullable();
            $table->string('monitor1_nomer')->nullable();
            $table->string('monitor2_model')->nullable();
            $table->string('monitor2_nomer')->nullable();
            $table->date('ishlabchiqarilgan_sana');
            $table->date('hisobgaolingan_sana');
            $table->string('olindi');
            $table->string('topshirildi');
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
        Schema::dropIfExists('technologies');
    }
};
