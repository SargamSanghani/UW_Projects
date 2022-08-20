<?php

$errors = [];

if(isset($_POST['register'])) {

    foreach($_POST as $key => $value) {
        if(is_string($value)) {
            $_POST[$key] = trim($value);
        }
    }

    $required = ['name', 'email', 'gender', 
                'level', 'hobbies'];

    foreach($required as $key) {
        if(empty($_POST[$key])) {
            $errors[] = "$key is a required field";
        }
    }

}

// for sticky values
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$level = $_POST['level'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobbies = $_POST['hobbies'] ?? [];

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

    <option <?=$level == 'bronze' ? 'selected' : ''?> 
        value="bronze">Bronze</option>

    <option <?=$level  == 'silver' ? 'selected' : ''?> 
        value="silver">Silver</option>

    <option <?=$level  == 'gold' ? 'selected' : ''?> 
        value="gold">Gold</option>

    <option <?=$level  == 'platinum' ? 'selected' : ''?> 
        value="platinum">Platinum</option>

</select>
</p>

<p>
<label for="gender">Gender</label> 

<input <?=$gender  == 'male' ? 'checked' : ''?> 
    type="radio" name="gender" value="male"> Male&nbsp;&nbsp;

<input <?=$gender == 'female' ? 'checked' : ''?> 
    type="radio" name="gender" value="female"> Female&nbsp;&nbsp;

<input <?=$gender  ==  'undisclosed' ? 'checked' : ''?> 
    type="radio" name="gender" value="undisclosed"> Undisclosed&nbsp;&nbsp;
</p>

<p>
<label for="hobbies">Hobbies</label><br />

<input <?=in_array('astronomy', $hobbies) ? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="astronomy"> Astronomy&nbsp;&nbsp;

<input <?=in_array('cycling', $hobbies) ? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="cycling"> Cycling&nbsp;&nbsp;

<input <?=in_array('movies', $hobbies) ? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="movies"> Movies<br />

<input <?=in_array('reading', $hobbies) ? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="reading"> Reading&nbsp;&nbsp;

<input <?=in_array('hiking', $hobbies) ? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="hiking"> Hiking&nbsp;&nbsp;

<input <?=in_array('other', $hobbies)? 'checked' : ''?> 
    type="checkbox" name="hobbies[]" value="other"> Other
</p>

<p><input type="submit" name="register"></p>

</form>


