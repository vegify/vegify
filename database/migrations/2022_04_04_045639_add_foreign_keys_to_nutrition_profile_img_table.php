<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNutritionProfileImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nutrition_profile_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'nutrition_profile_img_img')->references(['id'])->on('img');
            $table->foreign(['nutrition_profile_id'], 'nutrition_profile_img_nutrition_profile')->references(['id'])->on('nutrition_profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nutrition_profile_img', function (Blueprint $table) {
            $table->dropForeign('nutrition_profile_img_img');
            $table->dropForeign('nutrition_profile_img_nutrition_profile');
        });
    }
}
