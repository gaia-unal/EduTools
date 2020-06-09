<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParagraphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragraph', function (Blueprint $table) {
            $table->increments('id_paragraph');
            $table->timestamps();
            $table->string('text');
            $table->integer('order');
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
        Schema::drop('paragraph');
    }
}
