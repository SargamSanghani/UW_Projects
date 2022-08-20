<h1>Naming Functions</h1>
<pre>
<?php


function DOSOMETHING($str) {
    return STRTOLOWER($str);
}


$a = DOSOMETHING('HELLO');
$b = dosomething('WORLD');

print($a);
print('<br />');
print($b);