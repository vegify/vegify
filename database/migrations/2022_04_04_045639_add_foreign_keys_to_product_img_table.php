<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'product_img_img')->references(['id'])->on('img');
            $table->foreign(['product_id'], 'product_img_product')->references(['id'])->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_img', function (Blueprint $table) {
            $table->dropForeign('product_img_img');
            $table->dropForeign('product_img_product');
        });
    }
}
