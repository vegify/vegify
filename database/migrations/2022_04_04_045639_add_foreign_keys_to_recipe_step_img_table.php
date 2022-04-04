<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeStepImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe_step_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'recipe_step_img_img')->references(['id'])->on('img');
            $table->foreign(['recipe_step_id'], 'recipe_step_img_recipe_step')->references(['id'])->on('recipe_step');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_step_img', function (Blueprint $table) {
            $table->dropForeign('recipe_step_img_img');
            $table->dropForeign('recipe_step_img_recipe_step');
        });
    }
}
