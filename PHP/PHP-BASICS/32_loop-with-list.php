<?php

// $emp = [

//     [1, "Krishana", "Manager", 50000],
//     [2, "Salman", "Salesman", 20000],
//     [3, "Mohan", "Computer Operator", 12000],
//     [4, "Amir", "Driver", 50000],

// ];

// echo "<table border='1' cellpadding='5' cellspacing='0'>

//         <tr>
//             <th>Emp. Id</th>
//             <th>Name</th>
//             <th>Designation</th>
//             <th>Salary</th>
//         </tr>

// ";

// foreach ($emp as list($id, $name, $designation, $salary)) {
//     echo "<tr ><td > $id </td> <td> $name </td> <td> $designation $salary <td></td></tr>";
// }

// echo "</table>";

$emp = [
    [
        "id" => 1,
        "name" => "Krishana",
        "designation" => "Manager",
        "salary" => 5000
    ],
    [
        "id" => 2,
        "name" => "Salman",
        "designation" => "Salesman",
        "salary" => 20000
    ],
    [
        "id" => 3,
        "name" => "Mohan",
        "designation" => "Computer Operator",
        "salary" => 12000
    ],
    [
        "id" => 4,
        "name" => "Amir",
        "designation" => "",
        "salary" => 50000
    ],
];


echo "<table border='1' cellpadding='5' cellspacing='0'>

        <tr>
            <th>Emp. Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>

";

foreach ($emp as list('id' => $id, 'name' => $name,'designation' => $designation, 'salary' => $salary)) {
    echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
}

echo "</table>";
?>


