<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserBiometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_biometrics', function (Blueprint $table) {
            $table->foreign(['id'], 'user_biometrics_user')->references(['id'])->on('app_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_biometrics', function (Blueprint $table) {
            $table->dropForeign('user_biometrics_user');
        });
    }
}
