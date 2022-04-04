<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductIngredientLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ingredient_label', function (Blueprint $table) {
            $table->foreign(['ingredient_id'], 'product_ingredient_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['product_id'], 'product_ingredient_product')->references(['id'])->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_ingredient_label', function (Blueprint $table) {
            $table->dropForeign('product_ingredient_ingredient');
            $table->dropForeign('product_ingredient_product');
        });
    }
}
