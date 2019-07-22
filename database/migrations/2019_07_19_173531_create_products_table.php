<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('discount');
            $table->text('thumbnail')->default('https://lorempixel.com/300/300/?51994');
            $table->text('intro');
            $table->string('tag');
            $table->decimal('price', 13, 2);
            $table->integer('status');
            $table->timestamps();
            
            // Constraint
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
