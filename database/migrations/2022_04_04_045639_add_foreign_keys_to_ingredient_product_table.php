<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_product', function (Blueprint $table) {
            $table->foreign(['ingredient_id'], 'ingredient_product_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['product_id'], 'ingredient_product_product')->references(['id'])->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_product', function (Blueprint $table) {
            $table->dropForeign('ingredient_product_ingredient');
            $table->dropForeign('ingredient_product_product');
        });
    }
}
