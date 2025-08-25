# Laravel Project

This is a Laravel application.

## Requirements

- PHP >= 8.2
- Composer
- MySQL

## Installation

1. Clone the repository:

```bash
git clone https://github.com/miladul/AmarSolution.git
cd AmarSolution
```

2. Install dependencies:

```bash
composer install
```

3. Copy `.env` file:
   
4. DB_CONNECTION=mysql

```bash
cp .env.example .env
```

4. Set your database credentials in `.env`.

```bash

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=amar_solution_db
DB_USERNAME=root
DB_PASSWORD=

```

5. Generate application key:

```bash
php artisan key:generate
```

6. Run migrations (and optionally seeders):

```bash
php artisan migrate --seed
```

7. Serve the application:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Useful Commands

- `php artisan migrate` → Run database migrations
- `php artisan migrate:rollback` → Rollback last migration batch
- `php artisan db:seed` → Run seeders
- `php artisan make:model ModelName -m` → Create model with migration
- `php artisan make:controller ControllerName` → Create controller

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
