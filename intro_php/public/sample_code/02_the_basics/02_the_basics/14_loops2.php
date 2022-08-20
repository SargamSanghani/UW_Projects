<h1>While Loop</h1>
<table cellpadding="10" border="1">
    <tr>
        <th>Celsius</th>
        <th>Farenheit</th>
    </tr>
    <?php
    $i = -50;
    while($i<=50) {
        echo "<tr>";
        echo "<td>" . $i . " C</td>";
        echo "<td>" . ($i * 1.8 + 32) . " F</td>";
        echo "</tr>\n";
        $i++;
    }
    ?>
</table>