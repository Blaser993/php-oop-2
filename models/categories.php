<?php

class Categories{
    public $animale = "";
    public $icon = ""; 

    public function __construct(){
    }

    function setCategoria($_animale, $_icon) {
        $this->animale = $_animale;
        $this->icon = $_icon;
        return $_icon;
    }


}
