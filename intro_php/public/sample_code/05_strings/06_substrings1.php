<?php

$str = "I live in London and I think London is a great town.";

$sub = 'London';

$first_pos = strpos($str, $sub);

$last_pos = strrpos($str, $sub);

$result = sprintf('The first occurrance of "%s" can be found at position %d; the last occurance of "%s" can be found at position %d.', $sub, $first_pos, $sub, $last_pos);

?>
<h1>Substrings</h1>

<p><?=$str?></p>

<p><?=$result?></p>

