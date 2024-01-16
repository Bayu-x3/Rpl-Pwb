<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name, $legs, $cold_blooded){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }
}
?>
