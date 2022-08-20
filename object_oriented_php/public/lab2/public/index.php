<?php

require __DIR__ . '/../app/config/connect.php';
require __DIR__ . '/../app/Models/Model.php';
require __DIR__ . '/../app/Models/User.php';


Model::init($dbh);

$user = new User();

// get all user detail
$test1 = $user->getAll();
var_dump($test1);

// get user detail by ID
$test2 = $user->getOne(1);
var_dump($test2);

// Create new user
$array = [
    'first_name' => 'Sargam',
    'last_name' => 'Sanghani',
    'street' => 'My street', 
    'city' => 'Winnipeg', 
    'postal_code' => 'R2H 5S6',
    'province' => 'MB',
    'country' => 'Canada',
    'phone' => '424-432-4321',
    'email' => uniqid() . 'sargam.sanghani123@gmail.com',
    'password' => 'Abc@123',
    'is_subscribed' => 'true'
];
$lastInsertedId  = $user->create($array);
var_dump($user->getOne($lastInsertedId));

// update an existing user
$updatedArray = [
    'id' => 1,
    'first_name' => 'Hiral',
    'last_name' => 'Shah',
    'city' => 'Pune'
];
$updatedUserId = $user->update($updatedArray);
var_dump($user->getOne($updatedArray['id']));

// deleting a user
$test3 = $user->delete($lastInsertedId);
if ($test3 > 0) {
    echo "User deleted successfully!";
} else {
    echo "Sorry! Unable to delete the user!";
}