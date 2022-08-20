<?php


$book = [
    'id' => 22,
    'title' => 'Black Echo',
    'author' => 'Michael Connelly',
    'num_pages' => 322
];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Data</title>
</head>
<body>

<h1>Passing data from PHP to Javascript</h1>

<div>
    <p><strong>Title:</strong> <?=$book['title']?><br />
    <strong>Author:</strong> <?=$book['author']?><br />
    <strong>Num Pages:</strong> <?=$book['num_pages']?><br />
    <button onclick="readBook(event)" data-id="<?=book['id']?>">Read More</button>
</div>

<script>
    function readBook(e)
    {
        e.preventDefault();
        var id = e.target.dataset.id;
        console.log(id);
    }
</script>
</body>
</html>