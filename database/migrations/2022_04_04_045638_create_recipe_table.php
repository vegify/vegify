<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('as_ingredient_id');
            $table->integer('creator_id');
            $table->string('subtitle')->nullable();
            $table->integer('prep_minutes')->nullable();
            $table->integer('cook_minutes')->nullable();
            $table->integer('total_time')->nullable();
            $table->integer('video_id');
            $table->integer('steps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe');
    }
}
