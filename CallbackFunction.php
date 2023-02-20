<?php

//membuat function yang bisa callable
function sayHello(string $name, callable $filter){
  $finalName = call_user_func($filter,$name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Manto","strtolower");
sayHello("Manto","strtoupper");
//menggunakan function biasa
sayHello("Manto", function(string $name): string{
  return strtolower($name);
});
//Menggunakan arrow function
sayHello("Manto", fn($name)=> strtoupper($name));