<?php

$errors = [];

if(isset($_POST['register'])) {

    foreach($_POST as $key => $value) {
    $_POST[$key] = trim($value);
  }

  foreach($_POST as $key => $value) {
    if(empty($_POST[$key])) {
      $errors[] = "$key is a required field";
    }
  }
  
}

$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';

?>
<?php if(count($errors) > 0) : ?>
    <ul>
    <?php foreach($errors as $error) : ?>
        <li><?=$error?></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">
    <p><label>Name</label>  
       <input type="text" name="name" 
            value="<?=htmlentities($name)?>"></p>

    <p><label for="email">Email</label> 
       <input type="email" name="email" 
            value="<?=htmlentities($email)?>"></p>

    <p><input type="submit" name="register"></p>
</form>

