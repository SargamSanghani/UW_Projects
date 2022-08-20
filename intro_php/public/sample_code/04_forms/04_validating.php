<?php
$errors = [];

if(isset($_POST['register'])) {

    foreach($_POST as $key => $value) {
      $_POST[$key] = trim($value);
    }

    if(empty($_POST['name'])) {
        array_push($errors, 'Name is a required field.');
    }

    if(empty($_POST['email'])) {
         array_push($errors, 'Email is a required field.');
    }

}
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
       <input type="text" name="name"></p>

    <p><label for="email">Email</label> 
       <input type="email" name="email"></p>

    <p><input type="submit" name="register"></p>
</form>



