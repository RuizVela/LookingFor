<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Group::class, 15)->create()->each(function ($group)
        {
            $users = App\User::all();
                $usersSelected = $users->random(3);
                foreach ($usersSelected as $userSelected)
                {
                    $group->addUser($userSelected->id);
                }
    });
    }
}