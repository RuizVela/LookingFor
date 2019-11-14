<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Club::class,5)->create()->each(function ($club)
        {
            $users = App\User::all();
                $usersSelected = $users->random(3);
                foreach ($usersSelected as $userSelected)
                {
                    $club->addUser($userSelected->id);
                }
        });
        
    }
}