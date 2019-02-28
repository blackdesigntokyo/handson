<?php

// 1月の予定を一気に書き込む

$january = [];

for ($i=0; $i < 31; $i++){ //月
  for ($j=0; $j < 24; $j++){ //時間
    $day = $i+1;
    $time = $j+1;
    $january[($i + 1) . '日'][($j + 1) . '時'] = "{$day}日{$time}時の予定";
  }
}

var_dump($january);




for ($i=1; $i <=9; $i++) {
  for ($j=1; $j <=9; $j++){
    $cal = $i * $j;
    echo sprintf('%02d', $cal); // 01
    echo(" ");
  }
  echo PHP_EOL;
}

?>
