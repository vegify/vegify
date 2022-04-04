<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToImgTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('img_tag', function (Blueprint $table) {
            $table->foreign(['img_id'], 'img_tag_img')->references(['id'])->on('img');
            $table->foreign(['tag_id'], 'img_tag_tag')->references(['id'])->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('img_tag', function (Blueprint $table) {
            $table->dropForeign('img_tag_img');
            $table->dropForeign('img_tag_tag');
        });
    }
}
