<?php

require __DIR__ . '/config.php';
require __DIR__ . '/Validator.php';

if(isset($_POST['register']) && 'POST' == $_SERVER['REQUEST_METHOD']) {

    $v1 = new Validator($_POST);

    $required = ['first_name', 'last_name', 'email_address', 'phone_number', 'city', 'postal_code'];
    $v1->checkRequired($required);

    $v1->checkMinLength('first_name', 3);
    $v1->checkMaxLength('first_name', 30);
    $v1->validateName('first_name');

    $v1->checkMinLength('last_name', 3);
    $v1->checkMaxLength('last_name', 30);
    $v1->validateName('last_name');

    $v1->validateEmail('email_address');
    $v1->checkMaxLength('email_address', 50);

    $v1->validatePhone('phone_number');
    $v1->validatePostalCode('postal_code');

    // if there is any errors 
    if (count($v1->errors()) > 0) {
        $_SESSION['errors'] = $v1->errors();
        $_SESSION['post'] = $_POST;
        header('Location: form.php');
        die;
    }

    echo '<h1>Thank you for registering!</h1>';

}
