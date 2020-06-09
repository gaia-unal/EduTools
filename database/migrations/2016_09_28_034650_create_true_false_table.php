<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrueFalseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql3')->create('true_false', function (Blueprint $table) {
            $table->increments('id_true_false');
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
        Schema::connection('pgsql3')->drop('true_false');
    }
}
