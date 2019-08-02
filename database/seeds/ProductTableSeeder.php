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
        factory(App\Product::class, 200)->create()->each(function ($product) {
            $product->imageDetails()->saveMany(factory(App\ImageDetail::class, 4)->make());
            switch ($product->category_id) {
                case 1:
                    factory(App\CPU::class)->create(['product_id' => $product->id]);
                    break;
                case 2:
                    factory(App\Ram::class)->create(['product_id' => $product->id]);
                    break;
                case 3:
                    factory(App\Drive::class)->create(['product_id' => $product->id]);
                    break;
            }
        });
    }
}
