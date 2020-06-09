<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql2')->create('image', function (Blueprint $table) {
            $table->increments('id_image');
            $table->timestamps();
            $table->integer('order');
            $table->string('alternative');
            $table->string('source');
            $table->integer('content_id')->unsigned();
            $table->foreign('content_id')
                ->references('id_content')
                ->on('content')
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
        Schema::connection('pgsql2')->drop('image');
    }
}
