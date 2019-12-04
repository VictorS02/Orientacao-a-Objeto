<?php

class Produto {

    private $codProd;
    private $nome;
    private $custo;
    private $qtdEstoque;

    public function __construct($codProd, string $nome) {
        $this->codProd = $codProd;
        $this->nome = $nome;
    }

    public function getName() {
        return $this->nome;
    }

    public function getCodProd() {
        return $this->codProd;
    }

    public function setQtdEstoque(int $qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    public function poeEstoque($qtdProdAdicionado) {
        $qtdTotalEstoque = $this->getQtdEstoque();
        $qtdTotalEstoque += $qtdProdAdicionado;
        $this->qtdEstoque = $qtdTotalEstoque;
        return $this->qtdEstoque;
    }

    public function semEstoque() {
        if ($this->qtdEstoque == 0) {
        return true;
        } else {
        return false;
        }
    }

    public function setCusto($custo) {
        $this->custo = $custo;
    }

    public function getCusto() {
        return $this->custo;
    }
}

?>