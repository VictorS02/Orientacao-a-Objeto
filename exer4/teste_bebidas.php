<?php

require_once "Bebida.php";
require_once "Cafe.php";

$bebida1 = new Bebida("Suco", 200);
echo $bebida1 . "<br>";

$cafe1 = new Cafe("Latte", 300, 34.75);
echo $cafe1 . "<br>";