<?php

$str = 'to bE OR nOt tO bE THaT is thE QUEstioN';
$upper = strtoupper($str);
$lower = strtolower($str);
$title = ucwords( strtolower($str) );
$sentence =  ucfirst( strtolower($str) ) . '.';
$slug = str_replace(' ', '-', $lower);

?>
<h1>Transforming strings</h1>

<p>Original: <?=$str?></p>
<p>Uppercase: <?=$upper?></p>
<p>Lowercase: <?=$lower?></p>
<p>Title: <?=$title?></p>
<p>Sentence: <?=$sentence?></p>
<p>Slug: <?=$slug?></p>
