<h1>Foreach Loop</h1>
<table cellpadding="10" border="1">
    <tr>
        <th>Celsius</th>
        <th>Farenheit</th>
    </tr>
    <?php
    $temp = range(-50, 50);
    foreach($temp as $c) {
        echo "<tr>";
        echo "<td>" . $c . " C</td>";
        echo "<td>" . ($c * 1.8 + 32) . " F</td>";
        echo "</tr>\n";
    }
    ?>
</table>

