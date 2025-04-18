<?php

$marks = array(

    "Krishana" => array("physics" => 85, "chemistry" => 89, "math" => 78),
    "Salman" => array("physics" => 68, "chemistry" => 79, "math" => 73),
    "Mohan" => array("physics" => 62, "chemistry" => 92, "math" => 67),

);


echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<tr>
        <th>Name</th>
        <th>physics</th>
        <th>chemistry</th>
        <th>math</th>
    </tr>";


foreach ($marks as $key => $values) {

    echo "<tr>";

    echo "<td>$key</td>";

    foreach ($values as $key => $value) {
        echo "<td style='border: 1px solid'>";
        echo $value;
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";
