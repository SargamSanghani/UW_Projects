<?php

function label($key) {
    $key = str_replace('_', ' ', $key);
    $key = ucwords($key);
    return $key;
}

if('POST' == $_SERVER['REQUEST_METHOD']) {

     foreach($_POST as $key => $value) {
        $_POST[$key] = trim($value);
    }

    foreach($_POST as $key => $value) {
        if(empty($_POST[$key])) {
            $errors[] = "$key is a required field";
        }
    }

} 


?>
<h1>Generating Labels</h1>

<form method="post">

<p><label for="first_name">First Name</label> 
<input type="text" name="first_name" size="40"></p>

<p><label for="last_name">Last Name</label> 
<input type="text" name="last_name" size="40"></p>

<p><label for="email_address">Email Address</label> 
<input type="text" name="email_address" size="40"></p>

<p><input type="submit"></p>

</form>

<?php if('POST' == $_SERVER['REQUEST_METHOD']) : ?>

<p>
<?php foreach ($_POST as $key => $value) : ?>
    <strong><?=htmlentities( label($key) )?></strong>: 
        <?=htmlentities($value)?><br />
<?php endforeach; ?>
</p>

<?php endif; ?>
