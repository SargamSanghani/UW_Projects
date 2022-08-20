# User's API

This is the USER's API required for your project.  Please follow these instructions:

1. unzip the folder and place it inside your main Advanced PHP repository.  It does not need to be inside the project folder.

2. Add the `users_api` folder to your `.gitignore` file.  It should not be pushed to your repository.

3. Start the User's API with the following command executed inside the `users_api` folder:

```bash
php -S localhost:8001
```

**Important: the api must run on port 8001.  That is how it will be marked.**

## Endpoints

```text
GET /  returns all users
GET /?id={id} returns one user
POST / creates a new user
PUT / updates an existing user
```

## Structure of response

Response will be a json object with the following elements:

* status: indicates HTTP response status of request
* message: indicates success or failure of request
* results: an array of all returned users (zero to many)

```json
{
    "status":200,
    "message":"OK",
    "results": [
        {
            "id":1,
            "name": "Monah Swales",
            "email": "mswales0@illinois.edu",
            "phone": "859-492-6765", 
            "created_at": "2021-10-16 17:39:36",
            "updated_at": "2021-10-16 17:39:36"
        }
    ]
}
```