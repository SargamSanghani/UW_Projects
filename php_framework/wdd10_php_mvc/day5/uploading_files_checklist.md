# Uploading Images

1. Set Enctype on Form  -- multipart/form-data
2. Add a file upload field, same name as database field
2a. On edit form, output existing image above file field
3. Add image to validator: nullable|image
4. Test to make sure file was uploaded (if($request->file('field_name')))
5. Store the image:  $request->file('field_name')->store('folder_name'); // inside app/storage
6. Assign image name to $valid:  $valid['image'] = basename($path ?? 'default.jpg') // creating
6a. Assign image name or saved name to $valid:  $valid['image'] = basename($path ?? $book->image) // updating

