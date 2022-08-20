<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/books.php';

$books = getBooks($dbh);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Book List</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        container: {
          center: true
        }
      }
    }
  </script>
</head>

<body>

  <div class="container max-w-screen-lg">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="https://flowbite.com" class="flex items-center">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Books</span>
        </a>
        <div>
          <input type="search" placeholder="Search" class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onkeyup="search(event)">
        </div>
      </div>
    </nav>

    <div class="grid grid-cols-2 gap-4 text-center">
      <div class="drop-shadow-lg p-4">
        <h1 class="text-xl font-bold py-4">Booklist</h1>

        <table class="w-full text-left">
          <tr>
            <th class="py-2 border-b-4">Title</th>
            <th class="py-2 border-b-4">Author</th>
            <th class="py-2 border-b-4">Genre</th>
            <th class="py-2 border-b-4">Action</th>
          </tr>

          <tbody id="searchData">
            <?php foreach ($books as $book) : ?>

              <tr>
                <td class="py-2 border-b-4"><?= e($book['title']) ?></td>
                <td class="py-2 border-b-4"><?= e($book['author']) ?></td>
                <td class="py-2 border-b-4"><?= e($book['genre']) ?></td>
                <td class="py-2 border-b-4">
                  <button class="rounded-full bg-gray-700 px-4 text-white font-bold py-2" onclick="showDetail(<?= $book['book_id'] ?>); return false;">View</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="drop-shadow-lg p-4">
        <div id="bookDetail"></div>
      </div>

    </div>
  </div>

  <script>
    function showDetail(id) {
      $('#bookDetail').html('');
      $('#bookDetail').load('detail.php?id=' + id);
    }

    function search(e) {
      $('#searchData').html('');
      $('#searchData').load('search.php?key=' + e.target.value);
    }
  </script>

</body>

</html>