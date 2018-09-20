<?php
use App\Core\Seeder;

class MySeeder extends Seeder
{

    public function seed()
    {
        $this->invoke([PersonTableSeeder::class, TaskTableSeeder::class]);

    }

}