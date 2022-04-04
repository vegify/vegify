<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe_tag', function (Blueprint $table) {
            $table->foreign(['recipe_id'], 'recipe_tag_recipe')->references(['id'])->on('recipe');
            $table->foreign(['tag_id'], 'recipe_tag_tag')->references(['id'])->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_tag', function (Blueprint $table) {
            $table->dropForeign('recipe_tag_recipe');
            $table->dropForeign('recipe_tag_tag');
        });
    }
}
