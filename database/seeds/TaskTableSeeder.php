<?php

use App\Core\Seeder;
use App\Database\DB;

class TaskTableSeeder extends Seeder
{
    public function seed()
    {
        $faker = \Faker\Factory::create();

        echo "Seeding tasks table\n";

        for ($i = 0; $i < 50; $i++) {

            DB::table('tasks')->insert(['description' => $faker->name, 'done' => 0]);

        }
    }
}