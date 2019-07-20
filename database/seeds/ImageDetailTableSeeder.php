<?php

use Illuminate\Database\Seeder;

class ImageDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ImageDetail::class, 1000)->create();
    }
}
