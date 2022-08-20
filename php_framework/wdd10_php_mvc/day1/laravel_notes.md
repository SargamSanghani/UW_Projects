# Laravel Notes

## Installing a new Laravel Project

**Standard Install With Composer**

```bash
composer create-project laravel/laravel project_name --prefer-dist
```

**With Laravel Installer**

```bash
laravel new project_name
```


## Serving a Laravel Project


**1. With Artisan Serve**

from inside the project folder

```bash
php artisan serve
```

**2. With PHP Standalone Server**

from inside the project folder

```bash
php -S localhost:8000 -t public
```

**3. As a VHOST in XAMPP**

Configure a new VHOST pointing to the laravel project `public` folder:

```xml
<VirtualHost *:80>

   ServerName project.test
   DocumentRoot /path/to/project_folder/public

   <Directory /path/to/project_folder/public>
   		Options Indexes FollowSymLinks
   		AllowOverride All
   		Require all granted
   </Directory>

</VirtualHost>
```

## After cloning a laravel project

Run the following commands from the project folder:

```bash
composer Install
cp .env.example .env
php artisan key:generate
```