  <?php
  class Ape extends Animal
  {
      public function __construct($name, $legs = 2, $cold_blooded = "no")
      {
          $this->name = $name;
          $this->legs = $legs;
          $this->cold_blood = $cold_blooded;
      }

      public function yell()
      {
          echo "Auooo";
      }
  }
