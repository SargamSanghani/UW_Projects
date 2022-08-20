<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$errors = [];

if(isset($_POST['add_employee'])) {

  foreach($_POST as $key => $value) {
    $_POST[$key] = trim($value);
  }

  foreach($_POST as $key => $value) {
    if(empty($_POST[$key])) {
      $errors[$key][] = "$key is a required field";
    }
  } 

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['first_name'])) {
    $errors['first_name'][] = 'First name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['last_name'])) {
    $errors['last_name'][] = 'Last name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!preg_match('/^[A-z0-9\s\-\']{2,}$/', $_POST['department'])) {
    $errors['deparment'][] = 'Department name must contain only letters, spaces, numbers, dashes or apostrophies';
  }

  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'][] = 'Email must be a valid email address';
  }

  $num = preg_replace('/[^d]/', '', $_POST['phone']);
  if(strlen($num) > 11) {
    $errors['phone'][] = 'Phone must contain a valid phone number';
  }





} // end if $_POST

?>
<h1>Validate Form</h1>

<?php if(count($errors)) : ?>
    <div class="errors">
      <ul>
      <?php foreach($errors as $error) : ?>
        <li><?=e($error[0])?></li>
      <?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>

<form method="post">

  <p><label for="first_name">First Name</label><br />
  <input type="text" name="first_name" size="40"
  value="<?=e($_POST['first_name'] ?? '')?>"></p>

  <p><label for="last_name">Last Name</label><br />
   <input type="text" name="last_name" size="40"
   value="<?=e($_POST['last_name'] ?? '')?>"></p>

  <p><label for="email">Email Address</label><br />
  <input type="text" name="email" size="40"
  value="<?=e($_POST['email'] ?? '')?>"></p>

  <p><label for="phone">Phone Number</label><br />
  <input type="text" name="phone" size="40"
  value="<?=e($_POST['phone'] ?? '')?>"><br />
  <small>Any valid format</small></p>

  <p><label for="department">Department</label><br />
  <input type="text" name="department" size="40"
  value="<?=e($_POST['department'] ?? '')?>"></p>

  <p><input type="submit" name="add_employee"></p>

</form>





