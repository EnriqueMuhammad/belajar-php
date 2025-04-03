<?php

require_once("data/Manager.php");


$manager = new Manager();
$manager->name = "Manto";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Enrique";
$vp->sayHello("Joko");