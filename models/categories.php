<?php

class Categories{
    public $animale = ["Cani", "Gatti"];
    public $icon = ["icon1","icon2"]; 

    public function __construct(){
    }

    function setCategoria($_animale, $_icon) {
        $this->animale = $_animale;
        $this->icon = $_icon;
        return $_icon;
    }


}
