<?php
use App\Core\Seeder;

require('PersonTableSeeder.php');
require('TaskTableSeeder.php');

class MySeeder extends Seeder
{

    public function seed()
    {
        $this->invoke([PersonTableSeeder::class, TaskTableSeeder::class]);

    }

}