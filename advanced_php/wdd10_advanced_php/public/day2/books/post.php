<?php

if(empty($_POST)) {
    $json_str = file_get_contents('php://input');
    $_POST = (array) json_decode($json_str);
} 


$query = "INSERT INTO books
            (title, author, year_published, num_pages)
            VALUES
            (:title, :author, :year_published, :num_pages)";

$stmt = $dbh->prepare($query);

// $stmt->bindValue(':title', $_POST['TITLE'])

$params = array(
    ':title' => $_POST['title'],
    ':author' => $_POST['author'],
    ':year_published' => $_POST['year_published'],
    ':num_pages' => $_POST['num_pages']
);

$stmt->execute($params);

if($dbh->lastInsertId()) {
    $resp = [
        'status' => 'ok',
        'id' => $dbh->lastInsertId()
    ];
} else {
    $resp = [
        'status' => 'error',
        'message' => 'Unable to create record'
    ];
}

header('Content-Type: application/json');

echo json_encode($resp);

die;