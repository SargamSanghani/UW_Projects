<?php

define('DB_DSN', 'mysql:host=localhost;dbname=borland');
define('DB_USER', 'web_user');
define('DB_PASS', 'mypass');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = "SELECT id, first_name, last_name FROM employees";

$stmt = $dbh->query($query);

$result = $stmt->fetchAll();

?>
<h1>First Query</h1>

<table cellpadding="8" border="1">

<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
</tr>

<?php foreach($result as $row) : ?>

<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['first_name']?></td>
    <td><?=$row['last_name']?></td>
</tr>

 <?php endforeach; ?>

</table>
