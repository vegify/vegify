<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe_review', function (Blueprint $table) {
            $table->foreign(['recipe_id'], 'recipe_review_recipe')->references(['id'])->on('recipe');
            $table->foreign(['review_id'], 'recipe_review_review')->references(['id'])->on('review');
            $table->foreign(['user_id'], 'recipe_review_user')->references(['id'])->on('app_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_review', function (Blueprint $table) {
            $table->dropForeign('recipe_review_recipe');
            $table->dropForeign('recipe_review_review');
            $table->dropForeign('recipe_review_user');
        });
    }
}
