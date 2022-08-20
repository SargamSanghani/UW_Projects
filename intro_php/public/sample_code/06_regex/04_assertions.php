<?php

if(isset($_POST['password'])) {

    $pattern = '/(?=.*[A-Z]+)(?=.*[a-z]+)(?=.*[0-9])(?=.*[[:punct:]]+).{8,}/';

    if(!preg_match($pattern, $_POST['password'])) {
        $message = '<h2>Your password is not strong enough!</h2>';
    } else {
        $message = '<h2>Congratulationes!  Your password is strong';
    }
 
}

?>
<h1>Is your password strong enough?</h1>
<form method="post">
    <p><label for="password">Password</label> 
    <input type="text" name="password"> 
    <input type="submit" value="submit"></p>
</form>

<?=$message ?? '' ?>
