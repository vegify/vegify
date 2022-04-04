<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient', function (Blueprint $table) {
            $table->foreign(['batch_size'], 'ingredient_batch_size')->references(['id'])->on('amount');
            $table->foreign(['serving_size'], 'ingredient_serving_size')->references(['id'])->on('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient', function (Blueprint $table) {
            $table->dropForeign('ingredient_batch_size');
            $table->dropForeign('ingredient_serving_size');
        });
    }
}
