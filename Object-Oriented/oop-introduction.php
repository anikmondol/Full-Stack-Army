<?php

class Calculation{


    public $a, $b, $c;


    public function sum(){
        return $this->a = $this->b + $this->c;
    }

     public function sub(){
        return $this->a = $this->b - $this->c;
    }

}


$c1 = new Calculation();

$c1->b = 10;
$c1->c = 20;


echo $c1->sum() . "<br>";
echo $c1->sub() . "<br>";


$c2 = new Calculation();

$c2->b = 10;
$c2->c = 80;



echo $c2->sum() . "<br>";
echo $c2->sub() . "<br>";



?>