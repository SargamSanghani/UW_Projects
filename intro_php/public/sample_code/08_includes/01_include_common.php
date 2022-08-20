<?php

$title = 'Include Common Files.';

include './inc/functions.php';

$user = [
    'name' => 'Steve',
    'email' => 'edu@pagerange.com',
    'city' => 'winnipeg',
    'hobbies' => ['readin', 'ritin', 'rithmatic'],
    'status' => 'active'
];

?>
<h1><?=$title?></h1>

<?php dd($user, true); ?>

<ul>
    <li>Name: <?=e($user['name'])?></li>
    <li>Email: <?=e($user['email'])?></li>
    <li>City: <?=e($user['city'])?></li>
    <li>Status: <?=e($user['status'])?></li>
    <li>Hobbies:
        <ul>
            <?php foreach($user['hobbies'] as $hobby) : ?>
                <li><?=e($hobby)?></li>
            <?php endforeach; ?>
        </ul>
    </li>
</ul>
