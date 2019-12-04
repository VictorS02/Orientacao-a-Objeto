<?php

class ContaTelefone {
    private $nomeUsuario;
    private $numero;
    static $totalContas = 0;

    public function __construct($nomeUsuario, $numero) {
        $this->nomeUsuario = $nomeUsuario;
        $this->numero = $numero;
        ContaTelefone::$totalContas = ContaTelefone::$totalContas + 1;
    }

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function __toString() {
        return "Nome: ". $this->getNomeUsuario() .", Número: ". $this->getNumero();
    }  
    
    public static function getTotalPortas() {
        return ContaTelefone::$totalContas;
    }
}
?>