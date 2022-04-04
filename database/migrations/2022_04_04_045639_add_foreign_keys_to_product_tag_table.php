<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_tag', function (Blueprint $table) {
            $table->foreign(['product_id'], 'product_tag_product')->references(['id'])->on('product');
            $table->foreign(['tag_id'], 'product_tag_tag')->references(['id'])->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_tag', function (Blueprint $table) {
            $table->dropForeign('product_tag_product');
            $table->dropForeign('product_tag_tag');
        });
    }
}
