<?php

class Estudante {

    private $codEstudante;
    private $nomeEstudante;
    private $dataNascimento;
    private $pontosEnem;
    static $numEstudantes;

    public function __construct($codEstudante, $nomeEstudante, $dataNascimento, int $pontosEnem) {
        $this->codEstudante = $codEstudante;
        $this->nomeEstudante = $nomeEstudante;
        $this->dataNascimento = $dataNascimento;
        $this->pontosEnem = $pontosEnem;
        Estudante::$numEstudantes++;
    }

    public function getCodEstudante() {
        return $this->codEstudante;
    }

    public function getNomeEstudante() {
        return $this->nomeEstudante;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getPontosEnem() {
        return $this->pontosEnem;
    }

    public function getNumEstudantes() {
        return "Número de cadastros: " . Estudante::$numEstudantes;
    }

    public function __toString() {
        return $this->getNomeEstudante() . ", nasceu em " . $this->getDataNascimento() . ", tem como código de identificação " . $this->getCodEstudante() . ", possui a nota final do Enem igual a " . $this->getPontosEnem() . ".";
    }
}

?>