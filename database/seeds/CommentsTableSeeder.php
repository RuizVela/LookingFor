<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Comment::class,30)->create();
    }
}
