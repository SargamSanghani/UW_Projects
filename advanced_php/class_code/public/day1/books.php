<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

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
