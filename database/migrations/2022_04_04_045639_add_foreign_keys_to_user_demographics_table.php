<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_demographics', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_demo_user')->references(['id'])->on('app_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_demographics', function (Blueprint $table) {
            $table->dropForeign('user_demo_user');
        });
    }
}
