<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new animal ('shaun');

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs ."<br>";
echo "cold blooded : " . $sheep->cold_blooded;
echo " <br> <br>";

$kodok = new frog('buduk');

echo "Name : " .$kodok->name . "<br>";
echo "legs : " . $sheep->legs ."<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump();
echo "<br> <br>";

$sungokong = new Ape('kera sakti');

echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell();


?>