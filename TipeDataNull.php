<?php

$name = "Enrique";
$name = null;

$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age  ;
echo "\n";

$name = "Joko";
echo "Is name null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Jokowi";
unset($contoh);

// echo $contoh;