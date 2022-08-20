<?php

$languages = ['php', 'javascript', 'html', 'css', 'c', 'ruby', 'python'];

$my_str = '';

foreach($languages as $str) {
    $my_str .= $str . ', ';
}


?>
<h1>Formatting Strings</h1>

<p>Untrimmed:</p>
<p><?=$my_str?></p>

<p>Trimmed:</p>
<p><?=rtrim($my_str, ' ,')?></p>

