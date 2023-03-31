<?php

class Gadgets extends Products{
    public $materiale;

    public function __construct($_nome, $_prezzo, $_materiale){

        $this->nome = $_nome;
        $this->prezzo = $_prezzo."€";
        
        $this->materiale = $_materiale;
    }
}