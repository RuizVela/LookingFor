<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class)->create(['name'=>'wiki','email'=>'wiki@gmail.com', 'is_admin'=>true]);
        factory(App\User::class,10)->create();
    }
}
