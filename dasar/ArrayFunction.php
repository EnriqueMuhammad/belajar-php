<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$mapFunction = fn(int $value) => $value * 10;
//membuat data baru dengan array sebelumnya
$dataResult = array_map($mapFunction, $data);

var_dump($dataResult);

//balikan data menjadi descending
rsort($data);
var_dump($data);

//mengeluarkan data keys nya
var_dump(array_keys($data));
//mengeluarkan data values nya
var_dump(array_values($data));

$person = [
  "firstName"=> "Manto",
  "lastName" => "Muhammad"
];

var_dump(array_keys($person));
var_dump(array_values($person));
