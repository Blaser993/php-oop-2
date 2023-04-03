<?php

require_once __DIR__."./Categories.php";
require_once __DIR__."./../traits/Spedition.php";

class Products {

    use Spedition;

    public $nome;
    public $prezzo;
    public $tipologia;
    public Categories $categoria;
    public $immagine;


    public function __construct($_nome, $_prezzo, $_tipologia, Categories $_categoria){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo."€";
        $this->tipologia = $_tipologia;
        $this->categoria = $_categoria;
    }
}
