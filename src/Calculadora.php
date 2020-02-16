<?php

class Calculadora
{
 private $mensaje;
 public function __construct($mensaje) {
 $this->_mensaje = $mensaje;
 }

 public function getMensaje() {
 return $this->_mensaje;
 }
}


?>