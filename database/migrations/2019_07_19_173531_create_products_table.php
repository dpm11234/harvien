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
            $table->string('discount');
            $table->text('thumbnail');
            $table->text('intro');
            $table->text('review');
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
