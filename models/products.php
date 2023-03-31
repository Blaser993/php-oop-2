<?php

class Products {
    public $nome;
    public $prezzo;
    public $tipologia;
    public $immagine;


    public function __construct($_nome, $_prezzo, $_tipologia){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo."€";
        $this->tipologia = $_tipologia;
    }
}
