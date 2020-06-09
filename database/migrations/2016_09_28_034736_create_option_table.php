<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql3')->create('option', function (Blueprint $table) {
            $table->increments('id_option');
            $table->timestamps();
            $table->string('text');
            $table->integer('order');
            $table->integer('mul_sel_id')->unsigned();
            $table->foreign('mul_sel_id')
                ->references('id_multiple_selection')
                ->on('multiple_selection')
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
        Schema::connection('pgsql3')->drop('option');
    }
}
