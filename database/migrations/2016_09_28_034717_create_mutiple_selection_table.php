<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutipleSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql3')->create('multiple_selection', function (Blueprint $table) {
            $table->increments('id_multiple_selection');
            $table->timestamps();
            $table->string('text');
            $table->integer('order');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')
                ->references('id_question')
                ->on('question')
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
        Schema::connection('pgsql3')->drop('multiple_selection');
    }
}
