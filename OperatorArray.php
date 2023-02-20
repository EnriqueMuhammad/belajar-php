<?php

//untuk menggabungkan array dengan operator

$first = [
  "first_name" => "Enrique"
];

$last = [
  "first_name" => "Manto",
  "last_name" => "Muhammad"
];

//first name di variable last akan di ignore dan direplace oleh variable first
$full = $first + $last;
var_dump($full);

$a = [
  "first_name" => "Manto",
  "last_name" => "Muhammad"
];

$b = [
  "last_name" => "Muhammad",
  "first_name" => "Manto"
];

var_dump($a == $b);
var_dump($a ===$b);