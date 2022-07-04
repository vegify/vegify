<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            // $table->foreign('as_ingredient_id')->references('id')->on('ingredients');
            // $table->foreign('creator_id')->references('id')->on('users');
            $table->string('subtitle')->nullable();
            $table->decimal('prep_minutes')->nullable();
            $table->decimal('cook_minutes')->nullable();
            $table->decimal('total_time')->nullable();
            // $table->foreignId('video_id')->constrained()->nullable();
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
