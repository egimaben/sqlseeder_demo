# [SQLSeeder](https://github.com/egimaben/sqlseeder) Demo

## Install

Clone the repo:
``` bash
git clone https://github.com/egimaben/sqlseeder_demo.git
cd sqlseeder_demo
```
Install dependencies:

``` bash
composer install
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

The MIT License (MITx). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/egimaben
