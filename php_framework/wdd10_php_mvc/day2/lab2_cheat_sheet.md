# Lab 2 Cheat Sheet

1. Install Bootstrap

From your lab folder:

```bash
npm install
npm install bootstrap @popperjs/core
```

2. Create a migration

From you lab folder:

```bash
php artisan make:migration create_somes_table
```

3. To run your migrate

* Make sure database exists.
* Edit .env to add database and credentials

```bash
php artisan migrate
```

4. To seed you database

First create seeders with artisan:

```bash
php artisan make:seeder PostsTableSeeder
```

Edit the seeder.  Then, from your lab folder:

```bash
php artisan db:seed
```

5. To refresh and re-seed

From your lab folder

```bash
php artisan migrate:refresh --seed
```

6. Using models to query data

```php

// Get all records
$posts = App\Models\Post::all();

// Get one record
$post = App\Models\Post::find(3);

// Perform search for multiple records
$posts = App\Models\Post::where('title', '=', $title)->get();

// Search for one record
$user = App\Models\User::where('email', '=', $email)->first();

```