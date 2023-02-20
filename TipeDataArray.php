<?php
$values = array(10,9,8,7.5);
//mencari tahu isi dari array berserta tipe data
var_dump($values);

$names = ["Eko", "Kurniawan", "Enrique"];
//mencari tahu isi dari array berserta tipe data
var_dump($names);

//mencari tahu isi dari array index tertentu berserta tipe data
var_dump($names[0]);

//mengganti array index 0 dengan nama budi
$names[0] = "Budi";
var_dump($names);

//menghapus array index 1
unset($names[1]);

//menghitung jumlah data di dalam array
var_dump(count($names));

//menambahkan nama ke dalam array Names
$names[] = "Joko";

$eko = array(
  "id"  => "eko",
  "nama"=> "Eko Kurniawan",
  "age" => 30,
  "address" => array(
    "city" => "surabaya",
    "country"=> "indonesia"
  )
);

var_dump($eko);
//akses data didalam array nesting
var_dump($eko["address"]["country"]);

$budi = [
  "id"  => "Budi",
  "nama"=> "Budi Kurniawan",
  "age" => 35,
  "address" => [
    "city" => "surabaya",
    "country"=> "indonesia"
  ]  
];