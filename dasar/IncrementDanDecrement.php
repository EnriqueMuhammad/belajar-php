<?php

$a = 10;
$a++;
$a++;

var_dump($a);

//perbedaaan antara ++$a dan $a++

$b = ++$a;
//sama dengan
$a = $a + 1;
$b = $a;

$b = $a++;
//sama dengan
$b = $a;
$a = $a + 1;