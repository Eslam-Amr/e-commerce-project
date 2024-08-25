



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> <p align="center"> <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a> <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> </p>
About This Project
This is an eCommerce website built with Laravel 11, designed to provide a robust platform for users, sellers, and administrators. The application includes the following features:

User Roles: The platform supports three types of users—customers, sellers, and administrators.
Seller Registration: Users can register as sellers, and their status will be subject to admin approval.
Product Management: Sellers can upload products, which will be subject to admin review and approval before being published.
Admin Panel: A powerful admin panel for managing users, sellers, and products, supporting both LTR and RTL layouts.
Key Features
Laravel Breeze: Used for authentication, providing a simple and extensible starting point.
Spatie Query Builder: Integrated for advanced filtering and searching capabilities.
Livewire: For seamless real-time interactions within the application.
Mcamara Laravel Localization: Supports multiple languages, including the ability to switch between LTR and RTL layouts in the admin panel.
Installation
Clone the repository:

bash
Copy code
git clone https://github.com/your-repository.git
cd your-repository
Install dependencies:

bash
Copy code
composer install
npm install
Environment setup:

Copy the .env.example file to .env.
Set up your database credentials and other environment settings in the .env file.
Run migrations:

bash
Copy code
php artisan migrate
Seed the database (optional):

bash
Copy code
php artisan db:seed
Run the application:

bash
Copy code
php artisan serve
npm run dev
Usage
User Registration: Regular users can sign up and start purchasing products immediately.
Seller Registration: Users can apply to become sellers. Admins will review and approve or reject these requests.
Product Upload: Approved sellers can upload products, which must also be approved by an admin before being visible on the site.
Admin Management: Admins have full control over the platform, including user management, product approval, and site settings.
Localization
The application supports multiple languages, and the admin panel can switch between LTR and RTL layouts based on the selected language. This is achieved using the Mcamara Laravel Localization package.

Contributing
Contributions are welcome! Please follow the contribution guidelines for submitting pull requests.

