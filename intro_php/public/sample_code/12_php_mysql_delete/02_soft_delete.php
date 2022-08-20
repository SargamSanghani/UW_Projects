<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect2.php';

if(isset($_POST['delete'])) {

    if(intval($_POST['id']) != $_POST['id']) die('Employeed id must be an integer');

        $query = "UPDATE employees SET deleted = 1 WHERE  id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();

}


    
$query = "SELECT *
            FROM employees
            WHERE deleted != 1
            ORDER BY
            updated_at DESC";

$stmt = $dbh->prepare($query);

$stmt->execute();

$result = $stmt->fetchAll();

?>
<h1>Delete Employees</h1>

<h2>Select Employee To Soft Delete</h2>

<?php if(isset($_GET['search']) && !$result) : ?>

    <h3>Your search returned no results</h2>
        
<?php elseif(isset($_GET['search']) && $result) : ?>

    <h3>You search returned <?=count($result)?> result(s)</h3>

<?php endif; ?>

<table cellpadding="8" border="1">

<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Department</th>
    <th>Updated</th>
    <th>Edit</td>
</tr>

<?php foreach($result as $row) : ?>

<tr>
    <td><?=e($row['first_name'])?></td>
    <td><?=e($row['last_name'])?></td>
    <td><?=e($row['email'])?></td>
    <td><?=e($row['phone'])?></td>
    <td><?=e($row['department'])?></td>
    <td><?=e($row['updated_at'])?></td>
    <td>
        <form style="display: inline" method="post">
            <input  name="id" type="hidden" value="<?=e($row['id'])?>">
            <input onclick="return confirm('Do you really want to delete this item?');" type="submit" name="delete" value="delete" style="background:#900;color:#fff;border-color: #fff; border-radius: 5px;">
        </form>
    </td>
</tr>

 <?php endforeach; ?>

</table>
