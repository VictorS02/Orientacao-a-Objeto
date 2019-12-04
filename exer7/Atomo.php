<?php

class Atomo {

    private $neutrons;
    private $protons;
    private $eletrons;
    
    public function __construct($protons, $eletrons, $neutrons) {
        $this->protons = $protons;
        $this->eletrons = $eletrons;
        $this->neutrons = $neutrons;
    }

    public function getProtons() {
        return $this->protons;
    }

    public function getEletrons() {
        return $this->eletrons;
    }

    public function getNeutrons() {
        return $this->neutrons;
    }

    public function razaoHidrogenio() {
        if ($this->getProtons() == 1 && $this->getNeutrons() == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function razaoAtomo() {
        if ($this->getProtons() > 0) {
            return true;
        } else {                
            return false;
        }
    }
        
    public function razaoNeutrons() {
        if ($this->getNeutrons() >= 0) {
            return true;
        } else {        
            return false;
        }
    }

    public function razaoCationAnion() {
        if ($this->getProtons() > $this->getEletrons()) {
            return "cátion";
        } else {
            return "ânion";
        }
    }

    public function razaoIon() {
        if ($this->getEletrons() != $this->getProtons()) {
            return true;
        } else {  
            return false;
        }
    }
}

?>