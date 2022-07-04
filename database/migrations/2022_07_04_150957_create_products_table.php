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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('upc')->nullable();
            $table->bigInteger('price')->nullable();
            $table->enum('currency', ['USD'])->nullable();
            $table->boolean('is_vegan')->nullable();
            // $table->foreign('amazon_link')->references('id')->on('hrefs')->nullable();
            // $table->foreign('store_locator_link')->references('id')->on('hrefs')->nullable();            
            $table->string('description')->nullable();
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
        Schema::dropIfExists('products');
    }
};
