# Day 4 Topics

* Review Test
* Review Day 3
	- Installing wordpress with git
	- Data Model
		- posts
		- comments
		- users
	- Enqueuing Styles and Scripts
	- enabling post thumbnails
		- outputting post thumbnails
	- Migrating wordpress site
		- On server
			- Install wordpress on server
			- Setup vhost
			- Create empty database
			- Remove `wp-config.php`
		- Locally
			- Dump wordpress database
			- Edit dump and change site URL/domain
			- Upload database to server
			- Upload `themes`, `plugins`, `uploads` folders
		- Finish up
			- Import dump on mysql
			- Visit site and run web installer
- Custom Theme Tags (functions)
	- Created in Functions file
	- Called in theme
- Hooks
	- What are hooks?
	- Existing hooks
	- Adding actions to hooks
		- wp_head
		- wp_footer
- Filters
	- What are filters?
	- Existing filters
	- Adding filters to hooks
		- the_title
		- body_class
		- the_excerpt
		- the_content
- Accessing posts outside the loop
	- get_posts()
		- including and excluding
		- outputting posts outside the The Loop
	- get_pages()
- Plugins
	- Installing plugins
		- Activating plugins
		- Deactivating plugins
		- Using installed plugins
	- Installing a slider


