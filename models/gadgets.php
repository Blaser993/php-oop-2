<?php

class Gadgets extends Products{
    public $materiale;

    public function __construct($_nome, $_prezzo, $_materiale, Categories $_categoria){

        parent::__construct($_nome, $_prezzo, "Giocattoli", $_categoria);
        // $this->nome = $_nome;
        // $this->prezzo = $_prezzo."€";
        
        $this->materiale = $_materiale;
    }
}