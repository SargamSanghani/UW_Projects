<?php

$query = "INSERT INTO books 
('title', 'author', 'num_pages', 'year_published')
VALUES
(:title, :author, :num_pages, :year_published)";

$stmt = $dbh->prepare($query);

$params = array(
    ':title' => $_POST['title'],
    ':author' => $_POST['author'],
    ':year_published' => $_POST['year_published'],
    ':num_pages' => $_POST['num_pages'],
);

$stmt->execute($params);

if ($dbh->lastInsertId()) {
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