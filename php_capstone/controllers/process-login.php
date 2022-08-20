<?php

    $errors = [];

    if('POST' !== $_SERVER['REQUEST_METHOD']) {
        http_response_code(405);
        die('405 - Unsupported Request Method');
    }

    if(isset($_POST['submit']) && 'POST' == $_SERVER['REQUEST_METHOD']) {

        // trimming all the inserted values
        foreach($_POST as $key => $value) {
            $_POST[$key] = trim($value);
        }

        if (empty($_POST['email'])) {
            $errors['email'] = "Email address is required!";
        } 
        if (empty($_POST['password'])) {
            $errors['password'] = "Password is required!";
        } 
        
        // if user has entered email and a password
        if (count($errors) == 0) {
            $current_user = getUserByEmail($_POST['email']);

            if (!$current_user) {
                $_SESSION['flash']['error'] = "No such user found! Please try again!";
                header('Location: ?p=login');
                die;
            } else if(!password_verify($_POST['password'], $current_user['password'])) {
                $_SESSION['flash']['error'] = 'User credentials do not match! Please try again!';
                header('Location: ?p=login');
                die;
            } else {
                $target = '?p=profile';
                if (isset($_SESSION['target'])) {
                    $target = $_SESSION['target'];
                    unset($_SESSION['target']);
                }
                $_SESSION['flash']['success'] = 'Welcome Back, ' . $current_user['first_name'] . '! You have successfully logged in!';
                $_SESSION['user_id'] = $current_user['id'];
                session_regenerate_id();
                header('Location: ' . $target);
                die;
            }
        }
         
        $_SESSION['post'] = $_POST;
        $_SESSION['errors'] = $errors;
        header('Location: ?p=login');
        die;

        
    }
