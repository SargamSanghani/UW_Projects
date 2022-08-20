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
<pre>
<?php 
if(count($errors) > 0) {
  // output the errors
  print_r($errors);
} 
?>
</pre>
<form method="post">
    <p><label>Name</label>  
       <input type="text" name="name" 
            value="<?=$name?>"></p>

    <p><label for="email">Email</label> 
       <input type="email" name="email" 
            value="<?=$email?>"></p>

    <p><input type="submit" name="register"></p>
</form>

