<?php


for ($i=1; $i <=9; $i++) {
  for ($j=1; $j <=9; $j++){
    $cal = $i * $j;
    echo sprintf('%02d', $cal); // 01
    echo(" ");
  }
  echo PHP_EOL;
}

?>
