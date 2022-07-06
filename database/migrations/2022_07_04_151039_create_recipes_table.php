<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('as_ingredient_id')->nullable();
            $table->bigInteger('creator_id')->nullable();
            $table->string('subtitle')->nullable();
            $table->decimal('prep_minutes')->nullable();
            $table->decimal('cook_minutes')->nullable();
            $table->decimal('total_time')->nullable();
            $table->bigInteger('video_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
