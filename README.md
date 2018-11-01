<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Unified

Unified is a crowdsource funding project

## Installing

1. Pull the repository from the github repo.
2. Copy the .env_example to .env and make the necessary requirements
3. Link the storage directory with 
    
    php artisan storage:link
    
4. Run the migrations to seed the countries database
5. Import demo database, demo database located in the /db directory.
6. Check that everything is configured correctly on your server by running
    
    php artisan self-diagnosis
    
7. Run...
