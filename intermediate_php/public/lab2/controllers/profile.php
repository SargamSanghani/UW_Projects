<?php

$title = 'My Profile';

// checking whether id is there or not
if(empty($_GET['id'])) { 
    die('No profile id found!');
}

// checking for valid id
if(!filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    die('Invalid profile ID!');
}

$result = getUser();

// checking if there is any result found from database
if(!$result) {
    die('No profile found!');
}

view('profile', compact('result', 'title'));