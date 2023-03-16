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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('slack')->nullable();
            $table->string('github')->nullable();
            $table->string('mailchimp')->nullable();
            $table->string('asana')->nullable();
            $table->string('facebook')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('instagram');
            $table->dropColumn('youtube');
            $table->dropColumn('telegram');
            $table->dropColumn('twitter');
            $table->dropColumn('google');
            $table->dropColumn('slack');
            $table->dropColumn('github');
            $table->dropColumn('mailchimp');
            $table->dropColumn('asana');
            $table->dropColumn('facebook');
        });
    }
};
