<?php

echo 'Name: ';
echo 'Enrique Muhammad';
echo "\n";

echo 'Nama: ';
echo "Enrique\t Muhammad\t Ilham\n";

echo <<<TEKS_PANJANG
ini adalah teks panjang
yang dimodifikasi menggunakan heredoc, bisa pakai "quotation" juga
TEKS_PANJANG;

echo <<<'TEKS_PANJANG'
ini adalah teks panjang
yang dimodifikasi menggunakan nowdoc, bisa pakai "quotation" juga
TEKS_PANJANG;