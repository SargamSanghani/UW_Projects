# Day 3 Topics

* Review
	- Day 1
		- Multiple content types
		- Using conditionals to alter output
	- Day 2
		- The template hierarchy
		- Enabliing nav menus
		- Outputting nav menus
		- The basic theme workflow

* Installing Wordpress
	- download
	- git
		- `git clone --depth=1 https://github.com/WordPress/WordPress.git public`
	- subversion

* Wordpress Data Model
	- You need to create the database
	- Wordpress creates the tables

* Properly loading CSS
	- wp_enqueue_style
	- add_action to wp_enqueue_scripts hook
	- loading css with dependencies

* Properly loading Javascript
	- wp_enqueue_script
	- add action to wp_enqueue_scripts hoo
	- loading javascript with dependencies
	- injecting javascript at bottom of page

* Adding featured images/thumbnails
	- Enabling featured images
	- Image size names:

```php
	the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
	the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
	the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
	the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
	the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
```
* Outputting featured images
	- Testing for a featured image:
		- `get_the_post_thumbnail_url()`
	- Setting a default image

* Additional useful function tags
	- bloginfo()

* Migrating from localhost to production
	- Setup server and its db
	- Setup vhost
	- Dump local database and perform search/replace on domain
	- Upload dump to server
	- Load dump into mysql

* The Project
