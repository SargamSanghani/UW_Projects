# PHP MVC - Day 1 Topics

* What is Laravel
* PHP MVC Frameworks
* Why use a framwork?
* Installing Laravel
	- using Composer
	- using Laravel Installer
* Laravel approach: convention over configuration
* Where are files located?
	- Models
	- Views
	- Controllers
* Configuration
	- .env
	- config folder files
* Defining routes in `routes/web.php`
* Callback functions to handle routes
* Passing route parameters
* Route collisions
	- get('hello/{name}')
	- get('/hello/world') // this route will never get called if it is placed after the first route
* Controllers
* Invoking controllers in routes
* Controller methods
* Resource methods
* Views
* Passing data to views from callbacks and controller methods
