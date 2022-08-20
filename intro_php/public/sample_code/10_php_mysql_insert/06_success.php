<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$query = "SELECT id, first_name, last_name, created_at, updated_at FROM employees
        ORDER BY updated_at DESC";

$stmt = $dbh->query($query);

$result = $stmt->fetchAll();

?>
<h1>Success</h1>

<p><a href="05_add_redirect.php">Add A New Employee</a></p>

<table cellpadding="8" border="1">

<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Created</th>
    <th>Updated</th>
</tr>

<?php foreach($result as $row) : ?>

<tr>
    <td><?=e($row['id'])?></td>
    <td><?=e($row['first_name'])?></td>
    <td><?=e($row['last_name'])?></td>
    <td><?=e($row['created_at'])?></td>
    <td><?=e($row['updated_at'])?></td>
</tr>

 <?php endforeach; ?>

</table>

