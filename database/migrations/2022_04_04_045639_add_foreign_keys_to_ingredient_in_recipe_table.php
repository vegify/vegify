<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientInRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_in_recipe', function (Blueprint $table) {
            $table->foreign(['amount_id'], 'recipe_ingredient_amount')->references(['id'])->on('amount');
            $table->foreign(['ingredient_id'], 'recipe_ingredient_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['recipe_id'], 'recipe_recipe_ingredient')->references(['id'])->on('recipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_in_recipe', function (Blueprint $table) {
            $table->dropForeign('recipe_ingredient_amount');
            $table->dropForeign('recipe_ingredient_ingredient');
            $table->dropForeign('recipe_recipe_ingredient');
        });
    }
}
