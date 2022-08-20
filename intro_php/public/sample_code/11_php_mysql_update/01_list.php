<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$search = $_GET['search'] ?? '';

if(!empty($_GET['search'])) {

    $query = "SELECT *
    FROM employees
    WHERE
    first_name LIKE :search 
    OR
    last_name LIKE :search";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);

} else {
    
    $query = "SELECT *
                 FROM employees
                 ORDER BY
                 updated_at DESC";

    $stmt = $dbh->prepare($query);
}


$stmt->execute();

$result = $stmt->fetchAll();

$dbh = null; 

?>
<h1>Edit Employees</h1>

<h2>Select Employee To Edit</h2>

<form><input type="search" name="search" size="20" value="<?=e($search)?>" />
    <input type="submit" value="Search" /></form>

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
        <td><a href="02_edit.php?id=<?=e($row['id'])?>">edit</a></td>
    </tr>

     <?php endforeach; ?>

</table>
