<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->foreign(['amazon_link'], 'store_locator_url')->references(['id'])->on('href');
            $table->foreign(['store_locator_link'], 'url_product_amazon_url')->references(['id'])->on('href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('store_locator_url');
            $table->dropForeign('url_product_amazon_url');
        });
    }
}
