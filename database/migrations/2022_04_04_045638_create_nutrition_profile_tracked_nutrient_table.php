<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionProfileTrackedNutrientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_profile_tracked_nutrient', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('unit');
            $table->decimal('amount', 10, 0)->nullable();
            $table->decimal('grams', 10, 0);
            $table->integer('nutrient_id');
            $table->integer('nutrition_profile_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition_profile_tracked_nutrient');
    }
}
