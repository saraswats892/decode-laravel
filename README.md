# DECODE Knowledge Project – Laravel

A Laravel-based website and content management system developed for the DECODE Knowledge Project.

## About the Project

This project is a Laravel-based implementation of the DECODE Knowledge Project website.

The application includes a public website and an admin panel for managing project content such as publications, working papers, and advocacy resources.

## Features

- Public website
- Admin panel for content management
- Publications management
- Working Papers management
- Advocacy in Action management
- Image upload
- PDF upload
- External video links
- Form validation
- Pagination
- MySQL database integration
- Laravel Eloquent ORM
- Blade templates
- Laravel file storage
- CRUD operations

## Technology Stack

- PHP
- Laravel 13
- MySQL
- HTML5
- CSS3
- JavaScript
- jQuery
- Blade Template Engine
- Git
- GitHub

## Main Modules

### Publications

The admin panel allows users to:

- Add publications
- Edit publications
- Delete publications
- Upload publication images
- Display publications on the website
- Paginate publication records

### Working Papers

The admin panel allows users to:

- Add working papers
- Edit working papers
- Delete working papers
- Upload images
- Upload PDF files
- Display working papers on the website

### Advocacy in Action

The admin panel allows users to:

- Add advocacy content
- Edit advocacy content
- Delete advocacy content
- Upload images
- Add external video links or files

## Laravel Concepts Used

This project includes practical implementation of:

- MVC Architecture
- Routes
- Controllers
- Models
- Migrations
- Eloquent ORM
- Blade Templates
- CRUD Operations
- Form Validation
- File Upload
- Laravel Storage
- Pagination
- CSRF Protection
- Request Handling
- Database Operations

## Project Structure

Important directories used in this project:

- `app/Models` - Contains Eloquent models
- `app/Http/Controllers` - Contains application controllers
- `database/migrations` - Contains database migration files
- `resources/views` - Contains Blade view files
- `routes/web.php` - Contains web application routes
- `public/assets` - Contains website assets
- `storage/app/public` - Used for uploaded files

## Database

The project uses MySQL as the database.

Main tables include:

- `publications`
- `working_papers`
- `advocacy_in_actions`

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/saraswats892/decode-laravel.git
```

### 2. Go to the project directory

```bash
cd decode-laravel
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Create the environment file

```bash
copy .env.example .env
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Configure the database

Update the database details in the `.env` file.

### 7. Run migrations

```bash
php artisan migrate
```

### 8. Create the storage link

```bash
php artisan storage:link
```

### 9. Start the Laravel server

```bash
php artisan serve
```

Open the application in your browser:

http://127.0.0.1:8000

## Project Reference

This project is a Laravel-based recreation of the DECODE Knowledge Project website for learning and portfolio demonstration.

Original website:
[DECODE Knowledge Project](https://unescochair-cbrsr.org/decode)

The original website is not owned or hosted by me. This repository demonstrates my Laravel implementation based on the existing website structure and content.

## Project Purpose

This project demonstrates practical experience in converting an existing PHP-based website into a structured Laravel application.

It demonstrates the use of Laravel MVC architecture, Eloquent ORM, Blade templates, MySQL, CRUD operations, validation, pagination, and file management.

## Author

**Swati Saraswat**

PHP / Laravel Developer

### Skills

- PHP
- Laravel
- MySQL
- Zend Framework
- WordPress
- JavaScript
- jQuery
- HTML/CSS
- REST API
- Git & GitHub

## GitHub Repository

This repository is part of my Laravel development portfolio and demonstrates practical project implementation using Laravel and related web technologies.

## License

This project is for portfolio and demonstration purposes.
