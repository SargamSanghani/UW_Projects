<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$query = "SELECT id, first_name, last_name FROM employees";

$stmt = $dbh->query($query);

$result = $stmt->fetchAll();

$dbh = null; 

?>
<h1>List View</h1>

<table cellpadding="8" border="1">

<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>View</td>
</tr>

<?php foreach($result as $row) : ?>

<tr>
    <td><?=e($row['id'])?></td>
    <td><?=e($row['first_name'])?></td>
    <td><?=e($row['last_name'])?></td>
    <td><a href="06_dynamic_record.php?id=<?=e($row['id'])?>">view</a></td>
</tr>

 <?php endforeach; ?>

</table>
