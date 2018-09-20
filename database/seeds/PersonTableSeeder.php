<?php


use App\Core\Seeder;

use App\Database\DB;

class PersonTableSeeder extends Seeder
{

    public function seed()
    {
        $faker = \Faker\Factory::create();

        echo "Seeding person table\n";

        for ($i = 0; $i < 50; $i++) {

            DB::table('person')->insert(['name' => substr($faker->name, 0, 20), 'age' => $i]);

        }

    }
}