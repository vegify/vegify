<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReviewImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_img', function (Blueprint $table) {
            $table->foreign(['img_id'], 'review_img_img')->references(['id'])->on('img');
            $table->foreign(['review_id'], 'review_img_review')->references(['id'])->on('review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_img', function (Blueprint $table) {
            $table->dropForeign('review_img_img');
            $table->dropForeign('review_img_review');
        });
    }
}
