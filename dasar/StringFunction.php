<?php

//Menggabungkan isian array menjadi string
var_dump(join(",",[10,11,12,13,14,15]));
//Memecah string menjadi array
var_dump(explode(" ","Manto Muhammad Ilham"));
var_dump(strtolower("MANTO MUHAMMAD"));
var_dump(strtoupper("manto muhammad"));
var_dump(trim("            eko            "));
var_dump(substr("Manto Muhammad",0 , 3));