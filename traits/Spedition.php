<?php 

trait Spedition {
    public $cost;
    public $time;

    public function getSpedition(){
        return "$cost, $time";
    }
}
