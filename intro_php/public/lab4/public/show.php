<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

$title = 'Book Detail View';

if(isset($_GET['id'])) {

    $query ="SELECT 
            book.image,
            book.title, 
            book.year_published,
            book.num_pages, 
            book.in_print, 
            book.price, 
            book.description,
            author.name as author, 
            author.country as author_country,
            genre.name as genre,
            format.name as format,
            publisher.name as publisher,
            publisher.city as publisher_city,
            publisher.phone as publisher_phone
            FROM
            book
            INNER JOIN author on book.author_id = author.id
            INNER JOIN publisher on book.publisher_id = publisher.id
            JOIN genre on book.genre_id = genre.id
            JOIN format on book.format_id = format.id
            WHERE book.id = ?";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(1, $_GET['id']);

    $stmt->execute();

    $result = $stmt->fetch();

    if(!$result) {
        die('Sorry, no book available for the ID.');
    }

} else {
    die("Invalid book ID");
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=e($title)?></title>
</head>
<body>

    <h1>Detail: <?=e($result['title'])?></h1>

    <!-- Cover page of selected book  -->
    <img src="images/covers/<?=e($result['image'])?>" alt="<?=e($result['title'])?>">
        
    <ul>

        <!-- Start of: foreach loop for listing book detail  -->
        <?php foreach($result as $key => $row) : ?>
                <?php if ($key != 'book_id' && $key != 'image'): ?>
                    <li>

                        <!-- Converting object key to proper case words  -->
                        <strong><?=e(ucwords(str_ireplace('_', ' ', $key)))?>: </strong>

                        <!-- Converting boolean value to yes or no  -->
                        <?= $key == 'in_print' ? ($result[$key] == 1 ? 'Yes' : 'No') : esc($result[$key]) ?>
                    </li>
                <?php endif ?>
        <?php endforeach; ?>
        <!-- End of: foreach loop  -->
    </ul>

</body>
</html>
