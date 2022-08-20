<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = "SELECT 
            book.*,
            author.name as author,
            genre.name as genre,
            publisher.name as publisher,
            format.name as format
            FROM
            book
            JOIN author using(author_id)
            JOIN genre using(genre_id)
            JOIN publisher using(publisher_id)
            JOIN format using(format_id)
            WHERE book.in_print = 1
            order by book.title;";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

$json = json_encode($results);

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $json;
