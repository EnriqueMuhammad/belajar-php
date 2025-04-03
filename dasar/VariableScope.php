<?php
//global scope variable
$name = "Manto";

function sayHello(){
    //variable local sope
    $namelocal = "Manti";
    //global scope variable didalam function
    global $name;
    //variable global
    $GLOBALS;
    echo $GLOBALS["name"].PHP_EOL;
    echo $name.PHP_EOL;
}

function increment(){
    //static local counter
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}
sayHello();
increment();
increment();