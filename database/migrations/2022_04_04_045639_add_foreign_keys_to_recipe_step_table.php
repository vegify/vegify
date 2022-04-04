<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe_step', function (Blueprint $table) {
            $table->foreign(['video_id'], 'recipe_step_video')->references(['id'])->on('video');
            $table->foreign(['recipe_id'], 'step_recipe')->references(['id'])->on('recipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_step', function (Blueprint $table) {
            $table->dropForeign('recipe_step_video');
            $table->dropForeign('step_recipe');
        });
    }
}
