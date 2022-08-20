<?php

if(!empty($_GET['id'])) {
    $query = "SELECT * FROM users WHERE id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt->execute();
} else {
    $query = "SELECT * FROM users";
    $stmt = $dbh->query($query);
}

$response = [
    'status' => 200,
    'message' => 'OK',
    'results' => $stmt->fetchAll()
];

echo json_encode( $response );