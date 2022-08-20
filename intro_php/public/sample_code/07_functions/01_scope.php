<h1>Functions</h1>
<pre>
<?php

function add($num1, $num2)
{
    $a = $num1 + $num2;
    return $a;
}

$a = 6;
$b = 5;
echo "a: $a, b: $b <br />";
$c = add($a, $b);
echo "a: $a, b: $b, c: $c <br />";

