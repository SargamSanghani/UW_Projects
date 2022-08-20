<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (!empty($_GET['id'])) {

    $query = "SELECT * from users
        where id=:id";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);

    $stmt->execute();
    $results = $stmt->fetchAll();
} else {

    $query = "SELECT * from users";

    $stmt = $dbh->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll();
}

// adding extra params to the response
if (count($results)) {
    $response['status'] = 'ok';
    $response['count'] = count($results);
} else {
    $response['status'] = 'error';
    $response['count'] = 0;
}
$response['results'] = $results;
$json = json_encode($response);

header('Content-Type: application/json');
echo $json;
