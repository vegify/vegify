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
        Schema::create('ingredient_in_recipe', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('recipe_id')
                ->onDelete('cascade')
                ->constrained();
            $table
                ->foreignId('ingredient_id')
                ->onDelete('restrict')
                ->constrained();
            $table->foreignId('amount_id')->constrained();
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
        Schema::dropIfExists('ingredient_in_recipe');
    }
};
