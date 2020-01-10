<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Game::class,5)->create();
    }
}
