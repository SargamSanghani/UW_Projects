# Day 5 topics

* Review
	- HTTP Verbs and Routes (get = create, post = store)
	- Laravel Methods (create, store)
	- Validation
* Updating records
	- HTTP Verbs (get = edit, put = update)
	- Laravel Methods (edit)
		- The Edit route
		- The Edit method
		- Loading the form with data
		- outputting errors and sticky value
		- repurposing (old)
	- Laravel Methods (update)
		- validation
		- optional fields
		- Finding the record to update
		- Updating field values
		- Saving the record
* Uploading files
	- CREATE and STORE
		- Modify the form enctype
		- Add image field to create
		- Validation: required or optional?
		- Testing for an upload
		- saving the image and getting the path
		- assigning value to field
		- linking storage to public
	- EDIT AND UPDATE
		- Modify the form enctype
		- Add image field
			- NOT STICKY
		- Output image for user to see
		- Validation: OPTIONAL
		- `field = $path ?? $post->image`
* Middleware
	- Auth middleware - protecting routes
	- Adding Admin Middleware
	- Modifying the user table
	- Testing for admin



