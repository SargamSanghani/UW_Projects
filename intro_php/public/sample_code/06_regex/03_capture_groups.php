<?php

$errors = [];

if(isset($_POST['register'])) {

    $pattern = '/[^\d]/';
    $num = preg_replace($pattern, '', $_POST['phone']);
    
    $pattern = '/^([\d])?([\d]{3})([\d]{3})([\d]{4})$/';
    preg_match($pattern, $num, $matches);

    if(empty($matches)) {
        $errors[] = 'A valid phone number is required.';
    } elseif(strlen($matches[1] > 0)) {
        $phone = '+' . $matches[1];
        $phone .= '(' . $matches[2] . ') ';
        $phone .= $matches[3] . '-';
        $phone .= $matches[4];
    } else {
        $phone = '(' . $matches[2] . ') ';
        $phone .= $matches[3] . '-';
        $phone .= $matches[4];
    }
      
}

?>
<h1>Validating and Formatting with Capture Groups</h1>

<?php if(count($errors)) : ?>

<p><?=$errors[0]?></p>

<?php elseif(!count($errors) && isset($_POST['register'])) : ?>

<p>You entered this phone number: <?=htmlentities($_POST['phone'])?>.</p>
<p>We have normalized it to: <?=htmlentities($phone)?></p>
<p>Have a nice day!</p>

<?php endif; ?>

<form method="post">
    <p><label for="phone">Phone Number: </label>
        <input type="text" name="phone" size="20" />
    <input type="submit" name="register" /></p>
</form>

    

   

    
</body>
</html>