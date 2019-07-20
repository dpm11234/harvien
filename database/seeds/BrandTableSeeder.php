<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brand::class, 10)
            ->create()
            ->each(function ($brand) {
                $brand->products()->saveMany(
                    factory(App\Product::class,25)->make()
                );
            });
    }
}
