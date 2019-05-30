# server-inventory
Coding Challenge for Interview

## 1. Installation Instructions

a) Install Homestead and Vagrant, then Laravel
https://laravel.com/docs/5.8/homestead

b) clone code from https://github.com/samiaprr/server-inventory.git and add it to local code folder 
(see for folder structure/site mapping: https://www.danwalker.com/setting-up-a-laravel-homestead-box/)

c) make sure .env file is set up like the .env.example *****

d)In Vagrant, run commands :  composer install , php artisan migrate:fresh, php artisan db:seed --class=UsersTableSeeder, php artisan db:seed --class=ServersTableSeeder 

e) login information : email: sysadmin@gmail.com pw: secret


## 2. What I Used

I used the Laravel Framework to build the application. Styling is done with Bootstrap.





