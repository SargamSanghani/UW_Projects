<?php

$fruits = array(
    'apple',
    'orange',
    'banana',
    'pear'
);

?>

<h2>Fruits</h2>

<ul>
<?php foreach($fruits as $fruit) : ?>
    <li><?=$fruit?></li>
<?php endforeach; ?>
</ul>