# Personal eCommerce Tracker

This project is a minimal Laravel 12 application for tracking products and orders.

## Features
- Basic authentication (login & register)
- Dashboard with total products and orders
- Bootstrap 5 styling using a free admin template
- `public_html/` directory for Hostinger compatibility

## Deployment on Hostinger
1. Upload the entire project via FTP or SSH.
2. Move all contents of the `public_html` directory to the hosting `public_html` folder.
3. Give write permissions to `storage/` and `bootstrap/cache` using:
   `chmod -R 775 storage` and `chmod -R 775 bootstrap/cache`.
4. Copy `.env.example` to `.env` and update the database credentials provided by Hostinger.
   Ensure `APP_ENV=production` and `APP_DEBUG=false`.
5. Run `composer install --no-dev` if vendor files are not uploaded.
6. Run `php artisan migrate` from the project root using SSH.

## Local Setup
1. Install PHP 8.1+ and Composer.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and set your local database credentials.
4. Run `php artisan key:generate`.
5. Run migrations with `php artisan migrate`.
6. Serve the application using `php artisan serve` and visit `http://localhost:8000`.
