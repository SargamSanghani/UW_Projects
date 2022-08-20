<?php

$title = "Sign Up";

$id = null;

// if user has click on submit button
if(isset($_POST['submit']) && 'POST' == $_SERVER['REQUEST_METHOD']) {

    // an array of errors
    $errors = [];

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

        // length check for form fields
        if (($post_key == 'first_name' || $post_key == 'last_name' || $post_key == 'street' || $post_key == 'city' || 
        $post_key == 'email' || $post_key == 'password' ) && strlen($_POST[$post_key]) > 255) {
            $errors[$post_key][] = "Maximum length of the field must be 255";
        } else if (($post_key == 'province' || $post_key == 'country') && strlen($_POST[$post_key]) > 50) {
            $errors[$post_key][] = "Maximum length of the field must be 50";
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

    if (count($errors) == 0) {

        if (isUserExist($_POST['email']) == true) {

            $_SESSION['flash']['error'] = 'User already exists! Please login!';
            header("Location: ?p=sign-up");
            die;

        } else {
            $id = insertUser($dbh);

            // if data has been inserted, redirecting to profile page
            if($id) {

                $target = '?p=profile&id=' . $id;
                if (isset($_SESSION['target'])) {
                    $target = $_SESSION['target'];
                    unset($_SESSION['target']);
                }
                $_SESSION['flash']['success'] = 'You are registered successfully!';
                header("Location: " . $target);
                session_regenerate_id();
                $_SESSION['user_id'] = $id;
                die;
            } 
            
            // else showing an error message
            else {

                $_SESSION['flash']['error'] = 'Registration failed! Please try again!';
                header('Location: ?p=sign-up');
                die;
            } 
        }

    } else {
        $_SESSION['post'] = $_POST;
        $_SESSION['errors'] = $errors;
        header('Location: ?p=sign-up');
        die;
    }
}

$data['title'] = $title;

view('sign-up', compact('title', 'id', 'errors', 'flash', 'post'));