<?php
// 配列とif文の組み合わせ的なお題
// 難易度: ★★☆☆☆



// 3都府県のいくつかの駅名とある日の最高気温のデータを連想配列として持っています
$weatherInformation = [
    ['prefecture' => 1, 'station' => '渋谷', 'temperature' => 6.5],
    ['prefecture' => 1, 'station' => '池袋', 'temperature' => 7.0],
    ['prefecture' => 1, 'station' => '新橋', 'temperature' => 7.5],
    ['prefecture' => 2, 'station' => '梅田', 'temperature' => 8.2],
    ['prefecture' => 2, 'station' => '大阪', 'temperature' => 9.3],
    ['prefecture' => 2, 'station' => '堺', 'temperature' => 8.5],
    ['prefecture' => 3, 'station' => '博多', 'temperature' => 13.0],
    ['prefecture' => 3, 'station' => '太宰府', 'temperature' => 15.0],
];

$prefectures = [
    1 => '東京都',
    2 => '大阪府',
    3 => '福岡県',
    4 => '愛知県',
];

//Q1. ‘博多駅’ と出力してください。
echo 'Q1 : 実行結果';
echo PHP_EOL;
echo $weatherInformation[6][station].'駅';
echo PHP_EOL;

//Q2. ‘東京都渋谷駅の最高気温は6.5度でした’ と出力してください。
//echo '東京都渋谷駅の最高気温は'.$weatherInformation[0][temperature].'度でした';
//echo PHP_EOL;
$target = $weatherInformation[0];
$prefecture = $prefectures[1];
$station = $weatherInformation[0][station];
$temperature = $weatherInformation[0][temperature];
echo "{$prefecture}{$station}駅の最高気温は{$temperature}度でした";
echo PHP_EOL;


//Q3. 全国の平均気温は？
echo ($weatherInformation[0][temperature]+$weatherInformation[1][temperature]+$weatherInformation[2][temperature]+$weatherInformation[3][temperature]+$weatherInformation[4][temperature]+$weatherInformation[5][temperature]+$weatherInformation[6][temperature])/7;echo PHP_EOL;
echo PHP_EOL;




//Q4. 福岡県の平均気温は？
echo $weatherInformation[prefecture][3];
echo PHP_EOL;

//Q5. 大阪府のすべての駅名を半角スペース区切りで出力してね。


//Q6. 福岡県の久留米の最高気温は14.0度だったそうです。というわけで、このデータを追加してください。

//Q7. Q6. で追加したデータも含めて表形式で全てのデータを出力してみて下さい。



?>
