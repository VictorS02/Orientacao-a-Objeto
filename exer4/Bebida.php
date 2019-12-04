<?php

class Bebida {
    private $nome;
    private $calorias;
    static $totalBebidas = 0;

    public function __construct($nome, $calorias) {
        $this->nome = $nome;
        $this->calorias = $calorias;
        Bebida::$totalBebidas = Bebida::$totalBebidas + 1;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCalorias() {
        return $this->calorias;
    }

    public function __toString() {
        return "Nome: ". $this->getNome() .", Calorias: ". $this->getCalorias();
    }  
    
    public static function getTotalBeverages() {
        return Bebida::$totalBebidas;
    }
}
?>