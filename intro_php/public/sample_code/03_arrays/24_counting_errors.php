<form method="post">
    <p><label for="name">Name</label> <input id="name" name="name" /></p>
    <p><label for="email">Email</label> <input id="email" name="email" /></p>
    <p><input type="submit" name="register" /></p>
</form>
<pre>
<?php

$errors = []; // count 0

if(isset($_POST['register'])) {
    if(empty($_POST['name'])) {
        $errors[] = 'Name is required';
    }
    if(empty($_POST['email'])) {
        $errors[] = 'Email is required';
    }
    // Test for errors
    if(count($errors) == 0) {
        print_r($_POST);
    } else {
        print_r($errors);
    }
}

?>




