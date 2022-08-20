# Adding Middleware

1. `php artisan make:middleware RequireAdmin`
	- file will appear in app/Http/Middleware
2. Edit RequireAdmin
```php
	if(Auth::user() && Auth::user()->is_admin) {
        return $next($request);
    }
    session()->flash('error', 'You must be admin to view this resource');
    return redirect('/');
```
3. Register your new middleware in kernel.php in the $routeMiddeware array
```
'admin' => \App\Http\Middleware\RequireAdmin::class
```

4.  Last step, require the middleware in your Admin Posts Controller
	- create a constructor
	- add the middleware

```php
public function __construct()
{
	$this->middlware(['auth', admin']);
}
```

5. Update the users table, add a field called is_admin, boolean, default false.

6. Create a user for yourself (register) and manually set is_admin to true.

