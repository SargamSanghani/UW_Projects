# Day 4

* Review Test
* Pagination
* Outputting Categories with count
* Pass data down to partial
* View Composer
```php 
// app/Providers/AppServiceProvider
public function boot()
{
    \View::composer('partials/sidebar', function ($view) {
        $cats = Category::with('posts')->get();
        $view->with(['cats' => $cats]);
    });
}
```
* List views for categories


* CRUD - RESTful Routes
* Create - show form
* Store - Save form
* Form Validation
* Form stickiness
* Form errors
* CRUD - Delete a Record
* Lab 3: Add Create functionality on app
