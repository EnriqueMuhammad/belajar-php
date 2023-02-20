<?php
//membuat fungsi dengan return harus int
function sum(int $first, int $second): int{
  return $first + $second;
}

$total = sum(100,20);
echo $total;
var_dump($total);

//membuat fungsi dengan return harus string
function getFinalValue(int $value): string{
  if($value >= 80){
    return "A";
  } else if($value >= 70){
    return "B";
  } else if ($value >=60){
    return "C";
  } else if ($value >=50){
    return "D";
  } else{
    return "E";
  }
}

$score = getFinalValue(85);
var_dump($score);