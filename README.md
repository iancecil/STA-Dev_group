# STA-Dev


for the testing team here we have different modules done with different platforms.


we have used

1. LARAVEL
2. WORDPRESS
3. HARDCODES


for you to run the program PLEASE DO THE FOLLOWING


1. download wordpress(The latest)
2.  for laravel follow the following steps:



## Laravel 8 Complete Blog


## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```


composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database attach_system;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=attach_system
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
