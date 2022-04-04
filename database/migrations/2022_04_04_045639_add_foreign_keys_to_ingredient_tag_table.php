<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_tag', function (Blueprint $table) {
            $table->foreign(['ingredient_id'], 'ingredient_tag_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['tag_id'], 'ingredient_tag_tag')->references(['id'])->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_tag', function (Blueprint $table) {
            $table->dropForeign('ingredient_tag_ingredient');
            $table->dropForeign('ingredient_tag_tag');
        });
    }
}
