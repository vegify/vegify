<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientServingNutrientAmountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_serving_nutrient_amount', function (Blueprint $table) {
            $table->foreign(['ingredient_id'], 'ingredient_serving_nutrient_amount_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['nutrient_id'], 'ingredient_serving_nutrient_amount_nutrient')->references(['id'])->on('nutrient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_serving_nutrient_amount', function (Blueprint $table) {
            $table->dropForeign('ingredient_serving_nutrient_amount_ingredient');
            $table->dropForeign('ingredient_serving_nutrient_amount_nutrient');
        });
    }
}
