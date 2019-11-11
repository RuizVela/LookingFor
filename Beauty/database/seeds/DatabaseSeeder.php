<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            GamesTableSeeder::class,
            GroupsTableSeeder::class,
            OffersTableSeeder::class,
            AnswersTableSeeder::class,
            CommentsTableSeeder::class,
<<<<<<< HEAD

=======
            GamesTableSeeder::class,
>>>>>>> 8a7d1842c1d32f572c3d762c2769c6c6ac291be1
        ]);
    }
}
