<?php

    $str = "this is a reference string.";
    $len = strlen($str);
    $ucfirst = ucfirst($str);
    $reversed = strrev($str);
    $split = str_split($str, 5);
    $contain = str_contains($str, ' ');
    $repeat = str_repeat($str, 2);
    $ucfull = strtoupper($str);
    $lcfull = strtolower($str);

    echo "<p>len of string is $len </p>";
    echo "<p>Setting first letter uppercase: $ucfirst</p>";
    echo "<p>Reversed string is: $reversed</p>";
    print_r($split);
    echo "<p>Does string contain a space? : $contain</p>";
    echo "<p>Repeating string 2 times: $repeat </p>";
    echo "<p>Uppercased string: $ucfull</p>";
    echo "<p>Lowercased string: $lcfull</p>";

?>