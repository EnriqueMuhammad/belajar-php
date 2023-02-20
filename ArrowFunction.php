<?php

$firstName = "Manto";
$lastName = "Muhammad";

//Anonymous Function 
$anonymousFunction = function () use ($firstName,$lastName): string {
  return "Hello $firstName  $lastName" .PHP_EOL;
};
//Arrow Function
$sayHelloMantoArrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHelloMantoArrowFunction();
echo $anonymousFunction();
