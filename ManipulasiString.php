<?php

$name = "Enrique Muhammad Ilham";

//PHP_EOL adalah enter atau \n
echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//Mengubah number menjadi string
$valueString = (string)100;
var_dump($valueString);
//Mengubah string menjadi number
$valueInteger = (int)"100";
var_dump($valueInteger);
//Mengubah string menjadi float
$valueFloat = (float)"10.1";
var_dump($valueFloat);

//mengakses karakter string
$name = "Enrique";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[6] . PHP_EOL;

//Variable parsing
$name = "Manto";

echo "Hello " . $name . ", Selamat belajar php" . PHP_EOL;
echo "Hello $name Selamat belajar php" . PHP_EOL;

//CURLY BRACE
$var = "Manto";
echo "this is {$var}s".PHP_EOL;