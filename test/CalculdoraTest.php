<?php
include_once('./src/Calculadora.php');
use PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase{



        public function testSuma(){
        $saludo = new Calculadora(0);
        $this->assertEquals($saludo->Suma(2,2), 4);
        }
       
}
?>