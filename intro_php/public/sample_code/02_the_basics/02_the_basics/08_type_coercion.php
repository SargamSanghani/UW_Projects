<?php

$a = '25' + 25;
$b = '25' . 25;
$c = 25 . 25;
$d = 25.25;
// $e = 25 + 'hello';
// $f = 'hello' + 25;
$g = true + 3;
$h = 5 - false;
$i = (3 == 4 - true);
$j = intval(25 . "hello");
$k = intval("hello" . 25);
$l = floatval(25 . '25hello');
$m = floatval(25 . '.25hello');

echo '<pre>';
var_dump($a,$b,$c,$d,$g,$h,$i,$j,$k,$l,$m);

?>
