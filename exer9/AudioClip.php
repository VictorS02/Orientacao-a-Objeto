<?php

    class AudioClip {

    private $canais;
    private $resolucao;
    private $taxaAmostragem;
    private $duracao;

    public function __construct(int $canais, int $resolucao, int $taxaAmostragem) {
        $this->canais=$canais;
        $this->resolucao=$resolucao;
        $this->taxaAmostragem=$taxaAmostragem;
    }

    public function minimaQualidadePadrao() {
        $this->canais=1;
        $this->resolucao=8;
        $this->taxaAmostragem=22050;
    }

    public function setCanais($canais) {
        $this->canais=(int)$canais;
    }

    public function getCanais() {
        return $this->canais;
    }

    public function setResolucao($resolucao) {
        $this->resolucao=(int) $resolucao;
    }

    public function getResolucao() {
        return $this->resolucao;
    }

    public function setTaxaAmostragem($taxaAmostragem) {
        $this->taxaAmostragem=(int) $taxaAmostragem;
    }

    public function getTaxaAmostragem() {
        return $this->taxaAmostragem;
    }

    public function ehQualidadeEstudio() {
        if ($this->getCanais() == 2 && $this->getResolucao() == 24 && $this->getTaxaAmostragem() == 88200) {
            return true;
        } else {
            
            return false;
        }
    }

    public function setDuracao($duracao) {
        $this->duracao=(int) $duracao;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function duracaoMinima() {
        $this->duracao = 60;
        return $this->duracao;
    }

    public function tamanhoDados() {
        $bytes = ($this->getDuracao() * $this->getCanais() * $this->getTaxaAmostragem() * ($this->getResolucao() / 8));
        return $bytes;
    }

    public function conversor() {
        $kilo = round($this->tamanhoDados() / 1024, 2);
        $mega = round($kilo / 1024, 2);
        return $mega;
    }
}