<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('upc');
            $table->decimal('price', 10, 0);
            $table->boolean('is_vegan');
            $table->integer('amazon_link');
            $table->integer('store_locator_link');
            $table->string('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
