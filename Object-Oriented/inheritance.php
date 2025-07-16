<?php

class Employee
{

    public $name;
    public $age;
    public $salary;


    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {

        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: $this->name <br>";
        echo "Employee Name: $this->age <br>";
        echo "Employee Name: $this->salary <br>";
    }
}


class Manager extends Employee
{

    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function info()
    {

        $this->totalSalary = $this->salary + $this->salary + $this->phone;

        echo "<h3>Manger Profile</h3>";
        echo "Employee Name: $this->name <br>";
        echo "Employee Name: $this->age <br>";
        echo "Employee Name: $this->totalSalary <br>";
    }
}



$e1 = new Employee("Krishan", 27, 20000);
$e2 = new Manager("Ram", 24, 200000);


$e1->info();

$e2->info();
