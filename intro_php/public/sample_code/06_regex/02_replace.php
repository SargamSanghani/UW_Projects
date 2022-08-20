<?php

    $title = "My dog's     life    is     wonderful!";
    $rep = preg_replace('/[^A-z ]/', '', $title);
    $slug = strtolower( preg_replace('/[\s]+/', '-', $rep) );

?>
<h1>Replacing Classes of Character</h1>

<p>Title: <?=$title?></p>

<p>Slug: <?=$slug?></p>

