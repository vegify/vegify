<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNutritionProfileTrackedNutrientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nutrition_profile_tracked_nutrient', function (Blueprint $table) {
            $table->foreign(['nutrition_profile_id'], 'nutrition_profile_nutrient_amount_nutrition_profile')->references(['id'])->on('nutrition_profile');
            $table->foreign(['nutrient_id'], 'nutrition_profile_tracked_nutrient_nutrient')->references(['id'])->on('nutrient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nutrition_profile_tracked_nutrient', function (Blueprint $table) {
            $table->dropForeign('nutrition_profile_nutrient_amount_nutrition_profile');
            $table->dropForeign('nutrition_profile_tracked_nutrient_nutrient');
        });
    }
}
