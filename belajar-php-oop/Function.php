<?php

require_once("data/Person.php");

$eko = new Person("Eko", "Jakarta");
$eko->name = "Eko";
$eko->sayHello("Budi");


$manto = new Person("Manto", "Surabaya");
$manto->name = "Manto";
$manto->sayHello(null);

$eko->info();
$manto->info();