<?php
require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$sheep = new Animal("shaun", 4, "NO");
echo "Nama: ". $sheep->name . "<br>";
echo "Kaki: " . $sheep->legs . "<br>";
echo "Status Darah: " . $sheep->cold_blooded . "<br>";

echo "<br>";

$sungokong = new Frog("Buduk");
echo "Nama: ". $sungokong->name . "<br>";
echo "Kaki: " . $sungokong->legs . "<br>";
echo "Status Darah: " . $sungokong->cold_blooded . "<br>";
echo "Jump: ";
$sungokong->jump();

echo "<br><br>";

$kodok = new Ape("keraSakti");
echo "Nama: ". $kodok->name . "<br>";
echo "Kaki: " . $kodok->legs . "<br>";
echo "Status Darah: " . $kodok->cold_blooded . "<br>";
echo "Yell : ";
$kodok->yell();
?>
