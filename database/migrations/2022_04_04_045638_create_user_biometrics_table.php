<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBiometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_biometrics', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->boolean('calorie_tracking');
            $table->string('weight_goal');
            $table->decimal('weight_in_kg', 10, 0);
            $table->decimal('height_in_cm', 10, 0);
            $table->decimal('sex_multiplier', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_biometrics');
    }
}
