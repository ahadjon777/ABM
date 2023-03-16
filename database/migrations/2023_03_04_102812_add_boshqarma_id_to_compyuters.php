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
        Schema::table('compyuters', function (Blueprint $table) {
            $table->foreignId('boshqarma_id')->nullable()->constrained('boshqarmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compyuters', function (Blueprint $table) {
            $table->dropForeign(['boshqarma_id']);
        });
    }
};
