<?php


if(!empty($_GET['id'])) {

    $id = (int) $_GET['id'];

    $query = "SELECT * FROM BOOKS WHERE id = :id";

    $stmt = $dbh->prepare($query);

    $stmt->bindParam(':id', $id);

    $stmt->execute();


} else {
    $query = "SELECT * FROM BOOKS";

    $stmt = $dbh->prepare($query);

    $stmt->execute();

}

$results = $stmt->fetchAll();

$json = json_encode($results);

header('Content-Type: application/json');
echo $json;