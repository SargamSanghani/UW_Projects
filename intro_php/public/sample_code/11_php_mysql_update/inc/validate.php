<?php

foreach($_POST as $key => $value) {
    $_POST[$key] = trim($value);
  }

  foreach($_POST as $key => $value) {
    if(empty($_POST[$key])) {
      $errors[$key][] = "$key is a required field";
    }
  } 

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['first_name'])) {
    $errors['first_name'][] = 'First name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['last_name'])) {
    $errors['last_name'][] = 'Last name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['department'])) {
    $errors['deparment'][] = 'Department name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'][] = 'Email must be a valid email address';
  }

  $num = preg_replace('/[^d]/', '', $_POST['phone']);
  if(strlen($num) > 11) {
    $errors['phone'][] = 'Phone must contain a valid phone number';
  }
