<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserNutritionProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_nutrition_profile', function (Blueprint $table) {
            $table->foreign(['nutrition_profile_id'], 'user_nutrition_profile_nutrition_profile')->references(['id'])->on('nutrition_profile');
            $table->foreign(['user_id'], 'user_nutrition_profile_user')->references(['id'])->on('app_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_nutrition_profile', function (Blueprint $table) {
            $table->dropForeign('user_nutrition_profile_nutrition_profile');
            $table->dropForeign('user_nutrition_profile_user');
        });
    }
}
