<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecipeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipe_user', function (Blueprint $table) {
            $table->foreign(['recipe_id'], 'recipe_users_recipe')->references(['id'])->on('recipe');
            $table->foreign(['user_id'], 'recipe_users_user')->references(['id'])->on('app_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_user', function (Blueprint $table) {
            $table->dropForeign('recipe_users_recipe');
            $table->dropForeign('recipe_users_user');
        });
    }
}
