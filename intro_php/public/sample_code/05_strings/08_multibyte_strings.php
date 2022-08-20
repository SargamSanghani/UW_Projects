<h1>Multibyte character strings</h1>
<?php

$str1 = "dog";
$str2 = "dög";
$len1 = strlen($str1);
$len2 = strlen($str2);
$len3 = mb_strlen($str1);
$len4 = mb_strlen($str2);

$result1 = sprintf("<p>Using strlen(), the length of '%s' is %d, while the length of '%s' is %d</p>", $str1, $len1, $str2, $len2);

$result2 = sprintf("<p>Using mb_strlen(), the length of '%s' is  %d, while the length of '%s' is %d</p>", $str1, $len3, $str2, $len4);

echo $result1;

echo $result2;

