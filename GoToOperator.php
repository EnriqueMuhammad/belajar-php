<?php

goto a;
echo "Hello A" .PHP_EOL;

a:
echo "Hello from Goto";

//Di dalam loop
$counter = 1;

while($counter <=10){
  echo "Hello php" . PHP_EOL;
  $counter++;

  if($counter >10){
    goto end;
  }
}

end:
echo "End Loop";