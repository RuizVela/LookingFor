<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Answer::class,30)->create();
    }
}
