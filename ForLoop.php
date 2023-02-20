<?php

for ($i=1; $i < 10; $i++) { 
  echo "halo PHP" . PHP_EOL;
}

// for(;;){
//   echo "infinite loop" . PHP_EOL;
// }

$counter = 1;
for (; $counter < 10;) { 
  echo "halo PHP" . PHP_EOL;
  $counter++;
}