<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtitleCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql2')->create('subtitle', function (Blueprint $table) {
            $table->increments('id_subtitle');
            $table->timestamps();
            $table->integer('order');
            $table->string('text');
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
        Schema::connection('pgsql2')->drop('subtitle');
    }
}
