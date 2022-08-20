<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

// The user we want to see
$id = 2;

$query = "SELECT *
          FROM employees
          WHERE
          id = ?";

$stmt = $dbh->prepare($query);

$stmt->bindValue(1, $id, PDO::PARAM_INT);

$stmt->execute();

$emp = $stmt->fetch();

?>
<h1>Single Record</h1>

<p>
    <strong>Employee ID</strong>: <?=e($emp['id'])?><br />
    <strong>First Name</strong>: <?=e($emp['first_name'])?><br />
    <strong>Last Name</strong>: <?=e($emp['last_name'])?><br />
    <strong>Email</strong>: <?=e($emp['email'])?><br />
    <strong>Phone</strong>: <?=e($emp['phone'])?><br />
    <strong>Department</strong>: <?=e($emp['department'])?>

</p>
