<?php

    $str1 = 'Hello, World!    ';
    $str2 = '    What, you again?';
    $str3 = '    A bird in the hand     ';
?>
<h1>Formatting Strings</h1>

<p>View source...</p>

<p><?=$str1?></p>
<p><?=$str2?></p>
<p><?=$str3?></p>

<p>Now, trimmed...</p>

<p><?=rtrim($str1)?></p>
<p><?=ltrim($str2)?></p>
<p><?=trim($str3)?></p>
 
