<?php

switch ($nilai) {
  case 'A':
    echo "Anda lulus dengan baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Anda lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda tidak lulus dengan baik" . PHP_EOL;
    break;
  default:
    echo "Anda salah jurusan" . PHP_EOL;
    break;
}