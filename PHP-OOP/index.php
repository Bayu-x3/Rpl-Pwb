<?php
include "animal.php";
include "frog.php";
include "ape.php";

$sheep = new Animal("shaun", 4, "NO");
echo "Nama: ". $sheep->name . "<br>";
echo "Kaki: " . $sheep->legs . "<br>";
echo "Status Darah: " . $sheep->cold_blooded . "<br>";

echo "<br><br>";

$kodok = new Frog("Buduk");
echo "Nama: ". $kodok->name . "<br>";
echo "Kaki: " . $kodok->legs . "<br>";
echo "Status Darah: " . $kodok->cold_blooded . "<br>";
echo "Jump: ";
$kodok->jump();

echo "<br><br>";

$sungokong = new Ape("keraSakti");
echo "Nama: ". $sungokong->name . "<br>";
echo "Kaki: " . $sungokong->legs . "<br>";
echo "Status Darah: " . $sungokong->cold_blooded . "<br>";
echo "Yell : ";
$sungokong->yell();
?>
