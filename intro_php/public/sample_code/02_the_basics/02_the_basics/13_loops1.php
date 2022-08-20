<h1>For Loop</h1>
<table cellpadding="10" border="1">
    <tr>
        <th>Celsius</th>
        <th>Farenheit</th>
    </tr>
    <?php
    for($i=-50;$i<=50;$i++) {
        echo "<tr>";
        echo "<td>" . $i . " C</td>";
        echo "<td>" . ($i * 1.8 + 32) . " F</td>";
        echo "</tr>\n";
    }
    ?>
</table>

