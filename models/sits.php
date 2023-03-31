<?php

class Sits extends Products{
    public $capienza;

    public function __construct($_nome, $_prezzo, $_capienza){

        parent::__construct($_nome, $_prezzo, "Cucce", $_capienza);
        // $this->nome = $_nome;
        // $this->prezzo = $_prezzo."€";
        
        $this->capienza = $_capienza." individui";
    }
}