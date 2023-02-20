<?php

//Tanpa Null Coalescing Operator

$data = [];

if (isset($data['action'])){
  $action = $data['action'];
} else{
  $action = 'nothing';
}

echo $action;

//dengan null coalesing operator

$data = [];
$action = $data['action'] ?? 'nothing';

echo $action . PHP_EOL;