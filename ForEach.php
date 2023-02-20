<?php

$names = ["Enrique", "Muhammad", "Ilham"];

//Tanpa foreach
for ($i=0; $i < count($names); $i++) { 
  echo "Hello $names[$i]" . PHP_EOL;
}

//Dengan foreach
foreach ($names as $name) {
  echo "$name" . PHP_EOL;
}

foreach ($names as $index => $name) {
  echo "$index : $name" . PHP_EOL;
}

$person = [
  "first_name" => "Enrique",
  "last_name" => "Muhammad",
  "age" => "25"
];

foreach ($person as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
