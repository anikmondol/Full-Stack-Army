<?php

$emp = [

    [1, "Krishana", "Manager", 50000],
    [2, "Salman", "Salesman", 20000],
    [1, "Mohan", "Computer Operator", 12000],
    [1, "Amir", "Driver", 50000],

];


echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<tr>
        <th>Emp Id.</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>";

foreach ($emp as $values) {
    echo "<tr>";
    foreach ($values as $value) {
        echo "<td style='border: 1px solid'>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";


// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";


// echo "<pre>";

// print_r($emp);

// echo "</pre>";
