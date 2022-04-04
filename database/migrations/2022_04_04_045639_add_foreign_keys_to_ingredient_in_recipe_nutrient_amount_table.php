<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientInRecipeNutrientAmountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_in_recipe_nutrient_amount', function (Blueprint $table) {
            $table->foreign(['ingredient_in_recipe_id'], 'recipe_ingredient_nutrient_amount_recipe_ingredient')->references(['id'])->on('ingredient_in_recipe');
            $table->foreign(['nutrient_id'], 'ingredient_in_recipe_nutrient_amount_nutrient')->references(['id'])->on('nutrient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_in_recipe_nutrient_amount', function (Blueprint $table) {
            $table->dropForeign('recipe_ingredient_nutrient_amount_recipe_ingredient');
            $table->dropForeign('ingredient_in_recipe_nutrient_amount_nutrient');
        });
    }
}
