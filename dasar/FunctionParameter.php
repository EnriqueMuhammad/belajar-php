<?php
//membuat fungsi dengan default parameter
function sayHello($name ="Anonymous", $lastName=""){
  echo "Hello $name $lastName Selamat belajar php" . PHP_EOL;
}

sayHello("Enrique");

sayHello("Budi", "Utomo");

sayHello();

//membuat fungsi dengan tipe data parameter
function sum(int $first, int $last){
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,true);
// sum([],[]);

//Membuat variable length argumenlist

function sumAll(...$values){
  $total = 0;
  foreach($values as $value){
    $total += $value;
  }
  echo "Total " . implode(",",$values). " = $total" . PHP_EOL;
}

$values = [1,2,3,4,5];
sumAll(1,2,3,4,5);
sumAll(...$values);