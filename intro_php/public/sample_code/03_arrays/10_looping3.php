<?php

$user1 = [
    'name' => 'Davey Jones',
    'email' => 'davey@hotmail.com',
    'city' => 'London'
];

$user2 = [
    'name' => 'Clarice Starling',
    'email' => 'clarice@fbi.gov',
    'city' => 'Los Angeles'
];


$users = [$user1, $user2];


foreach($users as $key => $user) {
    echo 'Row Id: ' . $key . '<br />';
    echo 'Name: ' . $user['name'] . '<br />';
    echo 'Email: ' . $user['email'] . '<br />';
    echo 'City: ' . $user['city'] . '<br />';
    echo '-----------<br />';
}

?>