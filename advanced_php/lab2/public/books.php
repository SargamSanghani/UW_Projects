<?php

function getBooks($dbh)
{
    $query = "SELECT 
            book.book_id as book_id,
            book.title, 
            author.name as author,
            genre.name as genre
            FROM
            book
            JOIN author on book.author_id = author.author_id
            JOIN genre on book.genre_id = genre.genre_id
            WHERE book.in_print = 1
            order by book.title;";

    $stmt = $dbh->query($query);

    $results = $stmt->fetchAll();

    return $results ?? [];
}
