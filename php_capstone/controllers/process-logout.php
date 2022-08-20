<?php

    // checking user's ability to log out
    if('POST' !== $_SERVER['REQUEST_METHOD'] || !isLoggedIn()) {
        $_SESSION['flash']['error'] = 'Unable to log out!';
        header('Location: ?p=index');
        die; 
    }

    // if user has clicked oon logout button
    if(!empty($_POST['logout'])) {
        unset($_SESSION['user_id']);
        session_regenerate_id();
        $_SESSION['flash']['success'] = 'You have successfully logged out';
        header('Location: ?p=login');
        die;   
    }
