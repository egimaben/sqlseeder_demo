# [SQLSeeder](https://github.com/egimaben/sqlseeder) Demo

## Install

Create a project directory:
``` bash
$ mkdir myseeder && cd myseeder
```
Add `egimaben\sqlseeder` as a dependency:

``` bash
composer require egimaben\sqlseeder
```
My demo here uses Faker for generating data, so you will need to require it as well:
``` bash
composer require fzaninotto/faker"
```
## Usage

Create `database\seeds` directory structure in your project root and create a primary seeder class whose name must be `database\seeds\MySeeder.php` and must implement `App\Core\Seeder`. Any other seeder classes can be invoked from this class' `seed` method. `App\Database\DB` is mirror of `Illuminate\Database\Capsule\Manager` and is accessible you the client, see examples below:
### Seeder 1: database/seeds/TaskTableSeeder.php

``` php
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
```
### Seeder 2: database/seeds/PersonTableSeeder.php

``` php
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
```

### Primary Seeder: database/seeds/MySeeder.php

``` php
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
```
You must provide a `.env` file at the project root with the following mandatory configs:
``` props
DB_DRIVER = 'mysql'
DB_HOST = 'localhost'
DB_NAME = 'todo'
DB_USER = 'root'
DB_PASSWORD = ''

```
When all is set, run the following:

``` bash
./vendor/bin/console sql:seed
```

## Security

If you discover any security related issues, please email egimaben@gmail.com instead of using the issue tracker.

## Credits

- [Benedict Egima][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/egimaben
