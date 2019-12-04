<?php

class Numero {

    private $numero;
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function primo() {
        $numero = $this->getNumero();
        
        if ($numero != 1 && substr($numero, -1) != 0 && substr($numero, -1) != 2 && substr($numero, -1) != 4 && substr($numero, -1) != 6 && substr($numero, -1) != 8 && substr($numero, -1) != 5 && $numero % 6 != 0 && $numero % 9 != 0 || $numero == 2) {
            return true;
        } else {
            
            return false;
        }
    }
}