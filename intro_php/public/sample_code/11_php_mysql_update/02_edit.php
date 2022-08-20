<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

// The user we want to see
if(empty($_REQUEST['id'])) die('Please enter an employee id');

if(intval($_REQUEST['id']) != $_REQUEST['id']) die('Employeed id must be an integer');

$query = "SELECT *
          FROM employees
          WHERE
          id = :id";

$stmt = $dbh->prepare($query);

$stmt->bindValue(':id', $_REQUEST['id'], PDO::PARAM_INT);

$stmt->execute();

$emp = $stmt->fetch();

$errors = [];


if(isset($_POST['edit_employee'])) {

  require __DIR__ . '/inc/validate.php';

  if(count($errors) == 0) {

    $query = "UPDATE employees
            SET
            first_name = :first_name,
            last_name = :last_name,
            email = :email,
            phone = :phone,
            department = :department
            WHERE
            id = :id";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
    $stmt->bindValue(':department', $_POST['department'], PDO::PARAM_STR);
    $stmt->bindValue(':id', $_REQUEST['id'], PDO::PARAM_STR);

    $stmt->execute();

    $rows = $stmt->rowCount();

    header('Location: 01_list.php');
    die;



  } // end if count errors

} // end if POST

?>
<h1>Edit Record</h1>

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

<input type="hidden" name="id" value="<?=e($_REQUEST['id'] ?? $emp['id'])?>" >

<p><label for="first_name">First Name</label><br />
<input type="text" name="first_name" size="40"
value="<?=e($_POST['first_name'] ?? $emp['first_name'])?>"></p>

<p><label for="last_name">Last Name</label><br />
 <input type="text" name="last_name" size="40"
 value="<?=e($_POST['last_name'] ?? $emp['last_name'])?>"></p>

<p><label for="email">Email Address</label><br />
<input type="text" name="email" size="40"
value="<?=e($_POST['email'] ?? $emp['email'])?>"></p>

<p><label for="phone">Phone Number</label><br />
<input type="text" name="phone" size="40"
value="<?=e($_POST['phone'] ?? $emp['phone'])?>"><br />
<small>Any valid format</small></p>

<p><label for="department">Department</label><br />
<input type="text" name="department" size="40"
value="<?=e($_POST['department'] ?? $emp['department'])?>"></p>

<p><input type="submit" name="edit_employee"></p>

</form>

