<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


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