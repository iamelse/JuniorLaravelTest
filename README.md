## Link
https://laraveldaily.com/test-junior-laravel-developer-sample-project/

## Basic Test
* Basic Laravel Auth: ability to log in as administrator [ √ ]
* Use database seeds to create first user with email admin@admin.com and password “password” [ √ ]
* CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees [ √ ]
* Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website [ √ ]
* Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone [ √ ]
* Use database migrations to create those schemas above [ √ ]
* Store companies logos in storage/app/public folder and make them accessible from public [ √ ]
* Use basic Laravel resource controllers with default methods – index, create, store etc [ √ ]
* Use Laravel’s validation function, using Request classes [ √ ]
* Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page [ √ ]
* Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register [ √ ]

## Advance Test
* Use Datatables.net library to show table – with our without server-side rendering [ x ]
* Use more complicated front-end theme like AdminLTE [ x ]
* Email notification: send email whenever new company is entered (use Mailgun or Mailtrap) [ x ]
* Make the project multi-language (using resources/lang folder) √
* Basic testing with phpunit (I know some would argue it should be the basics, but I disagree) [ x ]

## Installation Guide
Open your terminal and follow this command
* Upgrade Composer "composer upgrade"
* Copy .env file "cp .env.example .env" and setup your database here
* Generating your app key "php artisan key:generate"
* Migrate your database app "php artisan migrate"
* Generating a user "php artisan db:seed UserSeeder"
* Dont forget to link storage with "php artisan storage:link"

Generating Dummy Data
if you want generate dummy data just use "php artisan migrate:fresh --seed" then run "php artisan db:seed UserSeeder" again

Image Not Showing
if this happen, you need change file system driver to public in .env file

## Screenshots

![Company](screenshot/company.png)
![Employee](screenshot/employee.png)