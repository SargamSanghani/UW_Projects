<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

if ("GET" == $_SERVER['REQUEST_METHOD'] && isset($_GET['id'])) {

    $query = 'SELECT 
            b.title, 
            b.image,
            a.name as author,
            g.name as genre,
            f.name as format,
            b.year_published,
            p.name as publisher,
            b.description,
            b.price
            from book b 
            join author a on a.author_id = b.author_id 
            join genre g on g.genre_id = b.genre_id
            join format f on f.format_id = b.format_id
            join publisher p on p.publisher_id = b.publisher_id
            where 
            b.in_print = 1
            and 
            b.book_id = ?';

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(1, $_GET['id'], PDO::PARAM_INT);

    $stmt->execute();

    $book = $stmt->fetch();
}
?><div class="text-left">
    <h1 class="text-xl font-bold py-4"><?= e($book['title']) ?></h1>

    <img src="images/covers/<?= e($book['image']) ?>" alt="<?= e($book['title']) ?>">

    <ul class="py-4">
        <li><strong>Title: </strong><?= e($book['title']) ?></li>
        <li><strong>Author: </strong><?= e($book['author']) ?></li>
        <li><strong>Genre: </strong><?= e($book['genre']) ?></li>
        <li><strong>Format: </strong><?= e($book['format']) ?></li>
        <li><strong>Year Published: </strong><?= e($book['year_published']) ?></li>
        <li><strong>Publisher: </strong><?= e($book['publisher']) ?></li>
        <li><strong>Description: </strong><?= html($book['description']) ?></li>
    </ul>

    <p><strong>Price: </strong>$<?= e($book['price']) ?></p>
    <button class="rounded-full bg-gray-700 px-4 text-white font-bold py-2">Add to Cart</button>
</div>