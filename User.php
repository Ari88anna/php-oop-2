<?php

class User {

    public $nome;

    public $cognome;

    public $email;
    
    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;       
    }   

    //array che contiene la lista degli articoli scelti dall'utente
    protected $lista_articoli = [];

    
    public function addItem($articolo) {
        $this->lista_articoli[] = $articolo;
    }

    public function getItems() {
        return $this->lista_articoli;
    }
}
?>