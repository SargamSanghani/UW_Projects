<?php

$errors = [];

if(isset($_POST['register'])) {

    $_POST = array_map(function($el){
        return is_string($el) ? trim($el) : $el;
    }, $_POST);

    $req = ['name', 'email', 'gender', 'level', 'hobbies'];

    foreach($req as $key) {
        if(empty($_POST[$key])) {
            $errors[] = "$key is a required field";
        }
    }

}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

?>
<?php if(count($errors) > 0) : ?>

<ul>
<?php foreach($errors as $error) : ?>
    <li><?=htmlentities($error)?></li>
<?php endforeach; ?>
</ul>

<?php endif; ?>


<form method="post" novalidate>

<p>
<label for="name">Name</label> 
<input type="text" name="name" 
    value="<?=htmlentities($name)?>">
</p>

<p>
<label for="email">Email</label> 
<input type="email" name="email" 
    value="<?=htmlentities($email)?>">
</p>

<p>
<label for="level">Membership Level</label> 
<select name="level">
    <option value="">Select Level</option>
    <option value="bronze">Bronze</option>
    <option value="silver">Silver</option>
    <option value="gold">Gold</option>
    <option value="platinum">Platinum</option>
</select>
</p>

<p>
<label for="gender">Gender</label> 
<input type="radio" name="gender" value="male"> Male&nbsp;&nbsp;
<input type="radio" name="gender" value="female"> Female&nbsp;&nbsp;
<input type="radio" name="gender" value="undisclosed"> Undisclosed&nbsp;&nbsp;
</p>

<p>
<label for="hobbies">Hobbies</label><br />
<input type="checkbox" name="hobbies[]" value="astronomy"> Astronomy&nbsp;&nbsp;
<input type="checkbox" name="hobbies[]" value="cycling"> Cycling&nbsp;&nbsp;
<input type="checkbox" name="hobbies[]" value="movies"> Movies<br />
<input type="checkbox" name="hobbies[]" value="reading"> Reading&nbsp;&nbsp;
<input type="checkbox" name="hobbies[]" value="hiking"> Hiking&nbsp;&nbsp;
<input type="checkbox" name="hobbies[]" value="other"> Other<br />
</p>

<p>
<input type="submit" name="register">
</p>

</form>

<pre>
    <?php print_r($_POST); ?>
</pre>
