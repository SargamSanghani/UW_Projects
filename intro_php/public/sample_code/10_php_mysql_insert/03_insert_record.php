<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$errors = [];

if(isset($_POST['add_employee'])) {

  require __DIR__ . '/inc/validate.php';
  
  if(count($errors) == 0) {

    $query = 'INSERT INTO
               employees
               (
                  first_name, 
                  last_name, 
                  email, 
                  phone, 
                  department
               )
               VALUES
               (
                  :first_name,
                  :last_name,
                  :email,
                  :phone,
                  :department
               )';

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
    $stmt->bindValue(':department', $_POST['department'], PDO::PARAM_STR);

    $stmt->execute();

    $employee_id = $dbh->lastInsertId();


    if(!$employee_id) {
      die('There was a problem inserting the record.');
    }    

    $_POST = []; // clear the form    

  } // end if no errors


} // end if $_POST

?>
<h1>Insert Record</h1>

  <?php if(count($errors)) : ?>
      <div class="errors">
        <ul>
        <?php foreach($errors as $error) : ?>
          <li><?=e($error[0])?></li>
        <?php endforeach; ?>
        </ul>
      </div>
  <?php endif; ?>

  <?php if(isset($employee_id) && $employee_id > 0) : ?>
<h2>Employee #<?=e($employee_id)?> has been added!</h2>
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



  

