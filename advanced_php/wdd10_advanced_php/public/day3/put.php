<?php

$data_str = file_get_contents('php://input');

parse_str($data_str, $put);

header('Content-Type: application/json');

echo json_encode($put);

/*

If we had had real, RESTful API endpoints:

GET /books  // returns list of books
GET /books?id={id}   // returns a single book
POST /books   // creates a new book
PUT /books?id={id}  // updates a book
DELETE /books?id={id}  // delete's a book

*/