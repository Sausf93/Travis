<?php

class Calculadora
{
    private $total=0;

    public function __construct($total) {
        $this->total = $total;
        }

    public function Suma($num1, $num2){

        $total=$num1+$num2;
        return $total;
    }
}


?>