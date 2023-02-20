<?php

//Bisa memanggil function dari dalam sebuah variable asalkan isinya adalan nama function
function foo(){
  echo "FOO" . PHP_EOL;
}

function bar(){
  echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();


//penggunaan di dunia nyata
function sayHello(string $name, $filter){
  $finalName = $filter($name);
  echo "Hello " . $finalName . PHP_EOL;
}

function sampleFunction(string $name):string{
  return "sample $name";
}

sayHello("Manto","strtolower");
sayHello("Manto","strtoupper");
sayHello("Manto","sampleFunction");