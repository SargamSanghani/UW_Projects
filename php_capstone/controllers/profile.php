<?php

$title = 'My Profile';

// checking whether user_id is there or not
if(empty($_SESSION['user_id'])) { 
    $_SESSION['flash']['error'] = "Sorry! You are not authorized to view this page!";
    header('Location: ?p=login');
    die;
}

// checking for valid id
if(!filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT)) {
    $_SESSION['flash']['error'] = "No such profile found!";
    header('Location: ?p=login');
    die;
}

$result = getUser(); // getting user detail from database

// checking if there is any result found from database
if(!$result) {
    $_SESSION['flash']['error'] = "Sorry! No data found!";
    header('Location: ?p=login');
    die;
}

view('profile', compact('result', 'title', 'flash'));