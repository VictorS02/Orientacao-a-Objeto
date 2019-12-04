<?php

class App {
    private $nome;
    private $id;
    static $download = 0;

    public function __construct($nome, $id) {
        $this->nome = $nome;
        $this->id = $id;
        App::$download = App::$download + 1;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return "Name: ". $this->getNome() .", ID: ". $this->getId();
    }  
    
    public function getDownloaded() {
        return App::$download;
    }
}
?>