<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCPUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CPUs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('socket', 10);
            $table->integer('cores')->unsigned();
            $table->integer('threads')->unsigned();
            $table->integer('base-frequency')->unsigned();
            $table->integer('turbo-frequency')->unsigned();
            $table->string('bus-speed');
            $table->string('memory-type');
            $table->integer('memory-size')->unsigned();
            $table->integer('memory-channel')->unsigned();
            $table->string('cache');
            $table->integer('tdp')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CPUs');
    }
}
