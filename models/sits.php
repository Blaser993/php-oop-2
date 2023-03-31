<?php

class Sits extends Products{
    public $capienza;

    public function __construct($_nome, $_prezzo, $_capienza, Categories $_categoria){

        parent::__construct($_nome, $_prezzo, "Cucce", $_categoria);
        // $this->nome = $_nome;
        // $this->prezzo = $_prezzo."€";
        
        $this->capienza = $_capienza." individui";
    }
}