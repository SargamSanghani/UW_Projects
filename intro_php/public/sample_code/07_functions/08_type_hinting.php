<?php

function happyBirthday(int $age, string $name, string $gender):string
{
    return '<p>Happy Birthday, ' . $name . '! A big ' . $gender . ' who is ' . $age . '!</p>';
}

echo '<h1>Type Hinting</h1>';

// echo happyBirthday(12, 'Dave', 'boy');

echo happyBirthday('twelve', 'Dave', 'boy');