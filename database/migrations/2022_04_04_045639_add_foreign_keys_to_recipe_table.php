<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe', function (Blueprint $table) {
            $table->foreign(['creator_id'], 'recipe_creator')->references(['id'])->on('app_user');
            $table->foreign(['as_ingredient_id'], 'recipe_ingredient')->references(['id'])->on('ingredient');
            $table->foreign(['video_id'], 'recipe_video')->references(['id'])->on('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe', function (Blueprint $table) {
            $table->dropForeign('recipe_creator');
            $table->dropForeign('recipe_ingredient');
            $table->dropForeign('recipe_video');
        });
    }
}
