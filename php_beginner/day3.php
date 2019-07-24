<?php

// for ($i=0; $i < 100, $i++){
//}

// foreach ($配列を指定 as $value){　
// 要素数3の場合は、3回ループ、そして$valueに入ってくれる


/*
$nameList = [
  'hiro',
  'reoring',
  'nouphet',
];

foreach ($nameList as $name) {
  var_dump($name);
  echo '<br>';
}



$nameList = [
  'kagoshima' => 'hiro',
  'tokyo' => 'reoring',
  'laos' => 'nouphet',
];

foreach ($nameList as $key => $name) {
  echo "{$name}は{$key}出身です";
  echo '<br>';
}
  echo '<br>';


// 関数
function addBr ($string){
  return $string. '<br>';
}

function arrayPrint($array){
  foreach ($array as $value){
    echo addBr($value);
  }
}

$array['ta', 'non', 'yyy'];
arrayPrint($array);

echo addBr('hayashi'); //hayashi. '<br>'
echo addBr('nana');
echo addBr('dondon');

var_dump(addBr('hiro'));
*/

function plus ($x, $y){
  return $x + $y;
}

echo plus(10, 20); //30
echo '<br>';





function writekuku ($x, $y){
  for ($i=1; $i <= $x ; $i++){
      for ($j=1; $j <= $y ; $j++){
        echo $i * $j;
          echo '<br>';
      }
  }
  echo '<br>';
}

echo writekuku(4, 6); //$x*$yまでの掛け算　1　2　3　4　　　1　2　3　4　5　6
echo '<br>';


/*
for ($i=1; $i <=9; $i++) {
  for ($j=1; $j <=9; $j++){
    $cal = $i * $j;
    echo sprintf('%02d', $cal); // 01
    echo(" ");
  }
  echo PHP_EOL;
}
*/

?>
