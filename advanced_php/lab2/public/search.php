<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

if ("GET" == $_SERVER['REQUEST_METHOD'] && isset($_GET['key'])) {

    $search = $_GET['key'];
    $query = 'SELECT
                b.book_id,
                b.title,
                a.name as author,
                g.name as genre
                from book b
                join author a on a.author_id = b.author_id
                join genre g on g.genre_id = b.genre_id
                where
                b.in_print = 1
                AND
               (b.title like :search)';

    $stmt = $dbh->prepare($query);
    $params = [':search' => "%$search%"];
    $stmt->execute($params);

    $books = $stmt->fetchALl();
}
?><?php foreach ($books as $book) : ?>

<tr>
    <td class="py-2 border-b-4"><?= e($book['title']) ?></td>
    <td class="py-2 border-b-4"><?= e($book['author']) ?></td>
    <td class="py-2 border-b-4"><?= e($book['genre']) ?></td>
    <td class="py-2 border-b-4">
        <button class="rounded-full bg-gray-700 px-4 text-white font-bold py-2" onclick="showDetail(<?= $book['book_id'] ?>); return false;">View</button>
    </td>
</tr>
<?php endforeach; ?>

<?php if (count($books) <= 0) : ?>
    <tr>
        <td class="py-2 border-b-4" colspan="4">No data found!</td>
    </tr>
<?php endif ?>