<?php

$name = "Manto";

$otherName = &$name;

$otherName = "Riko";

echo $name .PHP_EOL;

function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;

function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

echo $a . PHP_EOL;
