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
        Schema::table('ingredients', function (Blueprint $table) {
            $table
                ->bigInteger('serving_size')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->foreign('serving_size')
                ->references('id')
                ->on('amounts')
                ->onDelete('cascade');

            $table
                ->bigInteger('batch_size')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->foreign('batch_size')
                ->references('id')
                ->on('amounts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredients', function (Blueprint $table) {
            $table
                ->foreign('serving_size')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->bigInteger('serving_size')
                ->references('id')
                ->on('amounts')
                ->onDelete('cascade');

            $table
                ->foreign('batch_size')
                ->unsigned()
                ->index()
                ->change();
            $table
                ->bigInteger('batch_size')
                ->references('id')
                ->on('amounts')
                ->onDelete('cascade');
        });
    }
};
