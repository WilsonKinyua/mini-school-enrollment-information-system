## Mini student registration system

<img src="./screenshots/1.png" alt="screenshot" />
<img src="./screenshots/2.png" alt="screenshot" />
<img src="./screenshots/3.png" alt="screenshot" />
<img src="./screenshots/4.png" alt="screenshot" />
<img src="./screenshots/5.png" alt="screenshot" />
<img src="./screenshots/6.png" alt="screenshot" />

## Project setup

## Installation

>Install all the dependencies using <a href="https://getcomposer.org/download/">composer</a>

    composer update

>Run this command to copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

>Open the env file and edit these database fields

    DB_DATABASE=school
    DB_USERNAME=root
    DB_PASSWORD=

>Run this command to link the storage folder with the public folder

    php artisan storage:link

>Login details

    username/email: admin@admin.com
    password: password

>Then create the database you provided above

>Run this command to generate a new application key (**in the application root directory**)

    php artisan key:generate

>Import database <a href="hotel.sql">Hotel</a>



>Start the local development server

    php artisan serve

> You can now access the server at http://localhost:8000

# Happy Coding
