<?php

class Sits extends Products{
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_capienza){

        $this->nome = $_nome;
        $this->prezzo = $_prezzo."€";
        
        $this->capienza = $_capienza." individui";
    }
}