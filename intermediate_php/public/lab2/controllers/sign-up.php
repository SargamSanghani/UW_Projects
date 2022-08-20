<?php

$title = "Sign Up";

// an array of errors
$errors = [];
$id = null;

// if user has click on submit button
if(isset($_POST['submit']) && 'POST' == $_SERVER['REQUEST_METHOD']) {

    // trimming all the inserted values
    foreach($_POST as $key => $value) {
        $_POST[$key] = trim($value);
    }

    // list of required fields
    $required = ['first_name', 'last_name', 'password', 're_password', 'email', 'phone', 'street', 'city', 'postal_code', 'province', 'country'];

    // All fields are required
    foreach($required as $post_key) {
        if(empty($_POST[$post_key])) {
            $label = ucwords(str_replace('_', ' ', $post_key));
            $errors[$post_key][] = $label . " is required";
        }
    }

    // validating first name 
    if(!preg_match('/^[A-z0-9\s\-\,\']{1,32}$/', $_POST['first_name'])) {
        $errors['first_name'][] = 'First name contains invalid characters';
    }

    // validating last name 
    if(!preg_match('/^[A-z0-9\s\-\,\']{1,32}$/', $_POST['last_name'])) {
        $errors['last_name'][] = 'Last name contains invalid characters';
    }

    // validating password 
    if(!preg_match('/^\S*(?=\S{8,})(?=\S*[a-zA-Z])(?=\S*[\d])\S*$/', $_POST['password'])) {
        $errors['password'][] = 'Must contain at least 8 characters, a number and a special character';
    }

    // validating confirmed password 
    if($_POST['password'] != $_POST['re_password']) {
        $errors['re_password'][] = "Passwords don't match";
    }

    // validating email address 
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'][] = 'Email must be a valid email';
    }

    // validating phone number 
    if(!preg_match('/\d{3}-\d{3}-\d{4}/', $_POST['phone'])) {
        $errors['phone'][] = 'Phone number must be valid';
    }

    // validating postal code 
    if(!preg_match("/[a-zA-Z]\d[a-zA-Z][\s]\d[a-zA-Z]\d/", $_POST['postal_code'])) {
        $errors['postal_code'][] = 'Postal code must be valid';
    }

    // if there is no error found, inserting data to database
    if(count($errors) == 0) {    
        
        $id = insertUser($dbh);

        // if data has been inserted, redirecting to profile page
        if($id) {
            header("Location: ?p=profile&id=$id");
            die;
        } 
        
        // else showing an error message
        else {
            die('<h1>Error occurred!</h1>');
        } 
    }  
}

$data['title'] = $title;

view('sign-up', compact('title', 'id'));