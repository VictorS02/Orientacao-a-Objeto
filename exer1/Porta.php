<?php

class Porta {
    private $marca;
    private $largura;
    private $altura;
    static $totalPortas = 0;

    public function __construct($marca, $largura, $altura) {
        $this->marca = $marca;
        $this->largura = $largura;
        $this->altura = $altura;
        porta::$totalPortas = porta::$totalPortas + 1;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function __toString() {
        return "Área = ". $this->getLargura() * $this->getAltura();
    }  
    
    public static function getTotalPortas() {
        return porta::$totalPortas;
    }
}
?>