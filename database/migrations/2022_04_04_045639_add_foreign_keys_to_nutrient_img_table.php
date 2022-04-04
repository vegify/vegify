<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNutrientImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nutrient_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'nutrient_img_img')->references(['id'])->on('img');
            $table->foreign(['nutrient_id'], 'nutrient_img_nutrient')->references(['id'])->on('nutrient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nutrient_img', function (Blueprint $table) {
            $table->dropForeign('nutrient_img_img');
            $table->dropForeign('nutrient_img_nutrient');
        });
    }
}
