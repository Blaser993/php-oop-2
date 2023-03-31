<?php

class Food extends Products{
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_scadenza){

        parent::__construct($_nome, $_prezzo, "Cibo", $_scadenza);
        // $this->nome = $_nome;
        // $this->prezzo = $_prezzo."€";

        $this->scadenza = $_scadenza;
    }
}