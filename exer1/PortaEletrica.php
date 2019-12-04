<?php

class PortaEletrica extends Porta {
    private $potencia;

    public function __construct($marca, $largura, $altura, $potencia) {
        parent::__construct($marca, $largura, $altura);
        $this->potencia = $potencia;
    }

    public function __toString() {
        $msg = parent::__toString();
        return $msg .", Potência = ". $this->potencia;
    }
}