<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            GamesTableSeeder::class,
            ClubsTableSeeder::class,
            GroupsTableSeeder::class,
            OffersTableSeeder::class,
            AnswersTableSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}
