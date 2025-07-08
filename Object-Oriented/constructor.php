<?php


class Person{

public $name, $age;


function __construct($name, $age)
{
 $this->name = $name;
  $this->age = $age;   
}

function show(){
    echo $this->name . "-" . $this->age;
}

}


$c1 = new Person("anik", 55);

$c1->show();


?>