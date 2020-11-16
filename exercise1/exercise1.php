<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";

    echo "<tr style='font-weight: bold;'>";
        echo "<td > </td> \n";
        for ($col=1; $col <= 100; $col++) {
            echo "<td>$col</td> \n";
        }
    echo "</tr>";

    for ($row=1; $row <= 100; $row++) {
        echo "<tr> \n";

        echo "<td style='font-weight: bold;'>$row</td>";

        for ($col=1; $col <= 100; $col++) {
            $p = $col * $row;
            echo "<td>$p</td> \n";
        }

        echo "</tr>";
    }
echo "</table>";
?>