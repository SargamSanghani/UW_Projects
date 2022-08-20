<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

$title="Books";

$query ="SELECT 
        book.id as book_id,
        book.title, 
        author.name as author,
        genre.name as genre,
        format.name as format,
        publisher.name as publisher,
        book.price
        FROM
        book
        JOIN author on book.author_id = author.id
        JOIN publisher on book.publisher_id = publisher.id
        JOIN genre on book.genre_id = genre.id
        JOIN format on book.format_id = format.id
        WHERE book.in_print = 1
        order by book.title;";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=e($title)?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1><?=e($title)?></h1>

<table>

    <!-- Start of: dynamic headers using foreach loop  -->
    <tr>
        <?php foreach($results[0] as $key => $row) : ?>
            <?php if ($key != 'book_id'): ?>
                <th><?=ucfirst(e($key))?></th>
            <?php endif ?>
        <?php endforeach; ?>
    </tr>
    <!-- End of: foreach loop  -->

    <!-- Start of: dynamic td using foreach loop  -->
    <?php foreach($results as $row) : ?>
        <tr>
            <?php foreach($row as $key => $data) : ?>

                <!-- Anchor tag for title  -->
                <?php if ($key == 'title'): ?>
                    <td>
                        <a href="show.php?id=<?=$row['book_id']?>"><?=e($row[$key])?></a>
                    </td>
                    
                <!-- Else showing regular data  -->
                <?php elseif ($key != 'book_id'): ?>
                    <td>
                        <?=e($row[$key])?>
                    </td>
                <?php endif ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    <!-- End of: dynamic td using foreach loop  -->

</table>
    
</body>
</html>
