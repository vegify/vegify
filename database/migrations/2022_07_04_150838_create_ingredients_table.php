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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullablue();
            $table->text('description')->nullable();
            $table->boolean('is_vegan')->nullable();
            $table->bigInteger('serving_size')->nullable();
            $table->bigInteger('batch_size')->nullable();
            $table->timestamps();
        });

        // Schema::table('recipes', function(Blueprint $table) {
        //     $table->bigInteger('serving_size')->unsigned()->index()->change();
        //     $table->foreign('serving_size')->references('id')->on('amounts')->onDelete('cascade');

        //     $table->bigInteger('batch_size')->unsigned()->index()->change();
        //     $table->foreign('batch_size')->references('id')->on('amounts')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
