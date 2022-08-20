<?php

require __DIR__ . '/config.php';
require __DIR__ . '/escape.php';

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <style>
        .error {
            color: red;
        }
  </style>
</head>
<body>

  <h1>Register</h1>

<form action="process_form.php" method="post" novalidate>
    <p>
        <label for="first_name">First Name</label>
        <span class="error"><?=$errors['first_name'][0] ?? ''?></span><br />
        <input type="text" name="first_name" value="<?=e($post['first_name'] ?? '')?>" />
    </p>
    <p>
        <label for="last_name">Last Name</label>
        <span class="error"><?=$errors['last_name'][0] ?? ''?></span><br />
        <input type="text" name="last_name" value="<?=e($post['last_name'] ?? '')?>"/>
    </p>
    <p>
        <label for="email_address">Email Address</label>
        <span class="error"><?=$errors['email_address'][0] ?? ''?></span><br />
        <input type="text" name="email_address" value="<?=e($post['email_address'] ?? '')?>"/>
    </p>
    <p>
        <label for="phone_number">Phone Number</label>
        <span class="error"><?=$errors['phone_number'][0] ?? ''?></span><br />
        <input type="text" name="phone_number" value="<?=e($post['phone_number'] ?? '')?>"/>
    </p>
    <p>
        <label for="city">City</label>
        <span class="error"><?=$errors['city'][0] ?? ''?></span><br />
        <input type="text" name="city" value="<?=e($post['city'] ?? '')?>"/>
    </p>
    <p>
        <label for="postal_code">Postal Code</label>
        <span class="error"><?=$errors['postal_code'][0] ?? ''?></span><br />
        <input type="text" name="postal_code" value="<?=e($post['postal_code'] ?? '')?>"/>
    </p>
    <p><input type="submit" name="register"></p>
</form>
  
</body>
</html>