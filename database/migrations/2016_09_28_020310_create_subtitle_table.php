<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtitle', function (Blueprint $table) {
            $table->increments('id_subtitle');
            $table->timestamps();
            $table->integer('order');
            $table->string('text');
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
        Schema::drop('subtitle');
    }
}
