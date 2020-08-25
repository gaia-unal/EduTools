<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('id_image');
            $table->timestamps();
            $table->integer('order');
            $table->string('source');
            $table->string('alternative');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')
                ->references('id_page')
                ->on('page')
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
        Schema::drop('image');
    }
}
