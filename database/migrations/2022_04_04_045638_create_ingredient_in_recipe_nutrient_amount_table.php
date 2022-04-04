<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientInRecipeNutrientAmountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_in_recipe_nutrient_amount', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('unit');
            $table->decimal('amount', 10, 0)->nullable();
            $table->decimal('grams', 10, 0);
            $table->integer('nutrient_id');
            $table->integer('ingredient_in_recipe_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_in_recipe_nutrient_amount');
    }
}
