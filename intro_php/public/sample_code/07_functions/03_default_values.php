<?php

function sayHello($name, $upper = false) {
    if($upper) {
        $name = strtoupper($name);
    }
    return 'Hello, ' . $name . '!';
}


?>
<h1>Default Values</h1>

<p><?=sayHello('dave')?></p>

<p><?=sayHello('dave', true)?></p>

