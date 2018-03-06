php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan optimize
============================
php artisan clear-compiled 
composer dump-autoload
php artisan optimize
=============================
php artisan make:provider HelperServiceProvider
php artisan migrate
php artisan make:seeder UsersTableSeeder
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder
php artisan clear-compiled
composer dump-autoload
php artisan optimize
php artisan migrate:refresh
===========store data in file and auto save in database
php artisan iseed languages
======get data from file to database
php artisan migrate:refresh
php artisan db:seed
php artisan iseed checklist_detail,checklists,customers,invoice,invoice_detail,item_categories,items,items_detail,items_transaction,languages,migrations,open_items,open_items_detail,password_resets,production,production_detail,purchase,purchase_detail,sessions,settings,units,users
php artisan migrate --seed
Open the console and enter one of the commands to generate:
Models (available options: --softdelete)
$ php artisan backpack:model
Requests
$ php artisan backpack:request
Views (available options: --plain)
$ php artisan backpack:view
Config files
$ php artisan backpack:config
All files for a new Backpack\CRUD interface:
$ php artisan backpack:crud {Entity_name}
A new Backpack\CRUD file:
$ php artisan backpack:crud-controller {Entity_name}
$ php artisan backpack:crud-model {Entity_name}
$ php artisan backpack:crud-request {Entity_name}



php artisan make:migration create_teams_table --create=teams
php artisan serve --host 172.16.1.16 --port 8080
php artisan make:migration create_xxxxs_table

php artisan make:controller PhotoController --resource

https://github.com/riverskies/laravel-mobile-detect
