<?php

    $users = ['Bill', 'Ted', 'Shuba', 'Alex', 'Iqbal'];
    $title = 'Users';
    echo "<h1>$title</h1>";
    echo "<ul>";
    for ($i=0; $i < sizeof($users); $i++) {
        echo "<li>{$users[$i]}</li>";
    }
    echo "</ul>";

?>