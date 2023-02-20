<?php

$counter = 1;

while($counter <=10){
  echo "Hello php" . PHP_EOL;
  $counter++;

  if($counter >10){
    break;
  }
}

for($counter = 0;$counter <=100; $counter++){
  if($counter %2 == 0){
    continue;
  }
  echo "counter $counter adalah ganjil" . PHP_EOL;
}