<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id_chapter');
            $table->timestamps();
            $table->string('title');
            $table->string('subtopic');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')
                ->references('id_book')
                ->on('book')
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
        Schema::drop('chapter');
    }
}
