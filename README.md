# TruckSys Laravel 11

## Project Description

TruckSys is a Laravel 11 application designed for managing trucks. It includes features such as CRUD operations for trucks, user authentication, and more.

## Features

- Add, edit, view, and delete trucks
- User authentication
- Responsive design with Bootstrap
- Laravel 11 framework

## Requirements

- PHP 8.2 or higher
- Composer
- MySQL
- Node.js and npm

## Installation

1. 
   ```sh
   git clone https://github.com/xCyberpunkx/truckSys_lara11.git
Navigate to the project directory:


cd truckSys_lara11
Install the dependencies:


composer install
npm install
npm run dev
Create a copy of the .env file:


cp .env.example .env
Generate an application key:


php artisan key:generate
Configure your database in the .env file:

dotenv
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Run the database migrations:


php artisan migrate
Start the development server:


php artisan serve
Usage
Visit http://localhost:8000 to access the application.
Use the provided UI to manage trucks.
Contributing
Contributions are welcome! Please create a pull request or open an issue for any feature requests or bugs.

License
This project is open-source and available under the MIT License.


