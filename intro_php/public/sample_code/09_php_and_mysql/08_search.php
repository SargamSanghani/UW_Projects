<?php

require __DIR__ . '/inc/functions.php';
require __DIR__ . '/inc/connect.php';

$search = $_GET['search'] ?? '';

if(!empty($search)) {

    $query = "SELECT id, first_name, last_name 
               FROM employees
               WHERE
               first_name LIKE :search 
               OR
               last_name LIKE :search";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);

} else {
    
    $query = "SELECT 
                id, first_name, last_name 
                 FROM employees";

    $stmt = $dbh->prepare($query);
}


$stmt->execute();

$result = $stmt->fetchAll();


?>
<h1>Search Employee List</h1>

<form><p><input type="search" name="search" size="20" value="<?=e($search)?>" />
<input type="submit" value="Search" /></form>

<?php if(!$result) : ?>

    <h3>Your search returned no results</h2>
    
<?php else : ?>

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

<?php endif; ?>
