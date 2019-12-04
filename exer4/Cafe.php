<?php

class Cafe extends Bebida {
    private $cafeina;

    public function __construct($nome, $calorias, $cafeina) {
        parent::__construct($nome, $calorias);
        $this->cafeina = $cafeina;
    }

    public function __toString() {
        $msg = parent::__toString();
        return $msg .", Cafeina = ". $this->cafeina;
    }
}