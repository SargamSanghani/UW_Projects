<?php

// We want to extract a substring from the beginning of $str,
// to the end of the first occurance of 'London'

$str = "I live in London and I think London is a great town.";

$sub = 'London';

// this will get the length of string we want to extract
$len = strpos($str, $sub) + strlen($sub);

$extract = substr($str, 0, $len);

?>
<h1>Extracting Substrings</h1>

<p>Extracted substring: <?=$extract?></p>

