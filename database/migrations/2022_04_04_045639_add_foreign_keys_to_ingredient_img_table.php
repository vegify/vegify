<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'ingredient_img_img')->references(['id'])->on('img');
            $table->foreign(['ingredient_id'], 'ingredient_img_ingredient')->references(['id'])->on('ingredient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_img', function (Blueprint $table) {
            $table->dropForeign('ingredient_img_img');
            $table->dropForeign('ingredient_img_ingredient');
        });
    }
}
