<?php

class animal{
    public $legs = 4;
    public $cold_blooded = "no";
    public $name;

    public function __construct($string){
        $this->name=$string;
    }
}


?>