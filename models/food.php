<?php

class Food extends Products{
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_scadenza, Categories $_categoria){

        parent::__construct($_nome, $_prezzo, "Cibo", $_categoria);
        // $this->nome = $_nome;
        // $this->prezzo = $_prezzo."€";

        $this->scadenza = $_scadenza;
    }
}