<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNutrientAmountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nutrient_amount', function (Blueprint $table) {
            $table->foreign(['nutrient_id'], 'nutrient_amount_nutrient')->references(['id'])->on('nutrient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nutrient_amount', function (Blueprint $table) {
            $table->dropForeign('nutrient_amount_nutrient');
        });
    }
}
