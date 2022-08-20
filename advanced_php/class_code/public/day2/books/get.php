<?php 

if (!empty($_GET['id'])) {

    $query = "SELECT * from books
        where id=:id";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);

    $stmt->execute();
    $results = $stmt->fetch();
} else {

    $query = "SELECT * from books";

    $stmt = $dbh->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll();
}

$json = json_encode($results);
header('Content-Type: application/json');
echo $json;
