# Day 6 Topics

* Day 5 Review
	- Update Routes
	- Delete Routes
	- Uploading Files
	- File System Links

* Many to Many CRUD
	- Add Tags table
	- Add Intersect table
	- Add relationships in each model (belongsToMany)
	- Create form to allow adding tags to posts
		- attach ids to pivot
	- Output posts with tags
	- Make form tags sticky
* Sending Email
	- Setup mailtrap io service
	- Configure mailtrap
	- Test on Forgot Email
	- Create custom email
		- `php artisan make:mail WelcomeEmail`
		- edit `Mail/WelcomeEmail.php` for vars and correct view
		- Create email view `email.welcome.blade.php`
			- Add HTML, use `$user`
		- Send an email from the RegisterController
```php
 protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if($user) {
            Mail::to($user->email)->send(new WelcomEmail($user));
        }
        return $user;
    }
``` 
* Deploying Laravel Apps
* Course Review

