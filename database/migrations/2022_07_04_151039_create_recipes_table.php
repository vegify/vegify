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
            $table->bigInteger('as_ingredient_id')->nullable();
            $table->bigInteger('creator_id')->nullable();            
            $table->string('subtitle')->nullable();
            $table->decimal('prep_minutes')->nullable();
            $table->decimal('cook_minutes')->nullable();
            $table->decimal('total_time')->nullable();
            $table->bigInteger('video_id')->nullable();            
            $table->timestamps();
        });

        // Schema::table('recipes', function(Blueprint $table) { 
        //     $table->bigInteger('as_ingredient_id')->unsigned()->index()->change(); 
        //     $table->foreign('as_ingredient_id')->references('id')->on('ingredients')->onDelete('cascade'); 

        //     $table->bigInteger('creator_id')->unsigned()->index()->change(); 
        //     $table->foreign('creator_id')->references('id')->on('users'); 

        //     $table->bigInteger('video_id')->unsigned()->index()->change(); 
        //     $table->foreign('video_id')->references('id')->on('videos'); 
        // });
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
