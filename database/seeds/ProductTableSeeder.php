<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 200)->create()->each(function($product){
            $product->imageDetails()->saveMany(factory(App\ImageDetail::class, 4)->make());
        });
    }
}
