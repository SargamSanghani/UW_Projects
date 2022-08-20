<?php

$messages = [];
$names = [
    'John Davis-Walker 3rd', "Jennifer Lions's-Mane", 'Marigold! B0#er!',
    'Anderson McPherson Donald Teepoc McDoodle Johnson Churchill McKenzie'
];
$pattern = '/^[A-Za-z0-9\s\-\']{1,32}$/';

foreach($names as $name) {
    if(preg_match($pattern, $name)) {
        $messages[] = "\"$name\" is valid!";
    } else {
        $messages[] = "\"$name\" is NOT valid!";
    }
}

?>
<h1>Regex Refresher</h1>
<ul>
<?php foreach($messages as $msg) : ?>
    <li><?=htmlentities($msg)?></li>
<?php endforeach; ?>
</ul>
