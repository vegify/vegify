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
        Schema::table('recipes', function (Blueprint $table) {
            $table
                ->bigInteger('as_ingredient_id')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->foreign('as_ingredient_id')
                ->references('id')
                ->on('ingredients')
                ->onDelete('cascade');

            $table
                ->bigInteger('user_id')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');

            // $table
            //     ->bigInteger('video_id')
            //     ->unsigned()
            //     ->index()
            //     ->change();
            // $table
            //     ->foreign('video_id')
            //     ->references('id')
            //     ->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table
                ->foreign('as_ingredient_id')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->bigInteger('as_ingredient_id')
                ->references('id')
                ->on('amounts')
                ->onDelete('cascade');

            $table
                ->foreign('user_id')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->bigInteger('user_id')
                ->references('id')
                ->on('amounts')
                ->onDelete('restrict');

            // $table
            //     ->foreign('video_id')
            //     ->unsigned()
            //     ->index()
            //     ->change();
            // $table
            //     ->bigInteger('video_id')
            //     ->references('id')
            //     ->on('amounts')
            //     ->onDelete('cascade');
        });
    }
};
