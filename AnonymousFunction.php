<?php

//function didalam sebuah variable
$sayHello = function (string $name){
  echo "Hello " .$name . PHP_EOL;
};

$sayHello("Manto");
$sayHello("Emi");

function sayGoodBye(string $name, $filter){
  $finalName =  $filter($name);
  echo "Good bye $finalName" . PHP_EOL;
}

//menggunakan variable sebagai tempat menaruh function
$filterfunction = function($name){
  return strtoupper($name);
};

//memasukkan variable ke dalam function sayGoodbye
sayGoodBye("Manto",$filterfunction);

$firstName = "Manto";
$lastName = "Muhammad";

$sayHelloManto = function () use($firstName, $lastName){
  echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloManto();

//Nama tidak berubah karena sudah di assign ke variable sayHelloManto
$firstName = "Jokowi";
$lastName = "Widodo";
$sayHelloManto();