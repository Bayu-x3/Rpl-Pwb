<?php
class Frog extends Animal
{
    public function __construct($name, $legs = 4, $cold_blooded = "no")
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function jump()
    {
        echo "Hop Hop";
    }
}
