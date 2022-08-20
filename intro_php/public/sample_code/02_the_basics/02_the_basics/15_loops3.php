<h1>Do While Loop</h1>
<table cellpadding="10" border="1">
    <tr>
        <th>Celsius</th>
        <th>Farenheit</th>
    </tr>
    <?php
    $i = -50;
     do {
        echo "<tr>";
        echo "<td>" . $i . " C</td>";
        echo "<td>" . ($i * 1.8 + 32) . " F</td>";
        echo "</tr>\n";
        $i++;
    } while($i<=50)
    ?>
</table>