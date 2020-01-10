<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Offer::class,30)->create();
    }
}
