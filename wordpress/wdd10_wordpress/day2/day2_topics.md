# Day 2 Topics

* Review
	- Wordpress as CMS
	- Very popular
	- Suffers same problems as Windows
		- popularity
		- backwards compatibility
	- Minimal Required Theme Files
	* Lab review
	* Basic theme tags
		- wp_head()
		- wp_footer()
		- get_template_directory_uri()
		- get_stylesheet_uri()
		- wp_nav_menu()
		- wp_list_categories()
		- wp_get_archives()
	- Wordpress content types
		- post index
		- post
		- page
		- archive list (date)
		- category list
	- Conditional Theme Tags
		- is_page()
		- is_single()
		- is_singular()
		- is_category()
		- is_archive()
* Template Hierarchy (live coding)
	- A template for every content type
	- Very specific to default
		/ Home page or Front page
		/page
		/blog/post-title
		/category/movies
		/archive/2022/07
		search results
		non-existent file
	- Basic Theme Building Workflow
		- HTML
		- index.php
			+ get it working for basic list of blog posts
				- Loop
				- All basic theme tags
				- Single purpose... blog post listing
			+ break into components
				- header
				- footer
				- sidebar
	
	
	
