<h1>Pass By Reference</h1>
<?php

$name = 'Crawdaddy!';

function changeName(&$a)
{
    $a = strtoupper($a);
}

changeName($name);

print($name);
