<?php


/*
var_dump($_GET); // ←スーパーグローバル変数
echo '<br>===================<br>';
var_dump($_POST); // ←スーパーグローバル変数

?>
<form method="POST">
	<input type="text" name="test">
	<input type="submit" value="送信する">
</form>
*/


/*
class カレー
{
    public $aji = 'おいしい';
}
$curry = new カレー();
$curry->aji = 'ちょっとおいしい';
var_dump($curry);
$curry2 = new カレー();
var_dump($curry2);
echo '<br>';
*/






/*
class Anime {
	public $name = '???';
	public $production = 'プロダクション名';
	public function 劇場版(Anime $cinema) {
		$cinema->映画館 = '公開';
	}
}

$Euphonium = new Anime();
$Euphonium->name = '響け！ユーフォニアム！';
$Euphonium->production = 'kyoani';
var_dump($Euphonium);
echo '<br>';

$wataten = new Anime();
$wataten->name = '私に天使が舞い降りた';
var_dump($wataten);
echo '<br>';

$lovelive = new Anime();
$lovelive->name = 'ラブライブ！';
$lovelive->production = 'サンライズ';
$lovelive->劇場版($Euphonium);

var_dump($lovelive);
echo '<br>';
*/


//$triangle = new Triangle(100);
//var_dump($triangle);

//var_dump($triangle->width);

//var_dump($width);
//var_dump($triangle->$width);


/*
class 会社
{
    public function お問い合わせ(int $いい人)
    {
        if ($this->上司判断($いい人)) {
            return '菓子折り';
        } else {
            return 'お断り';
        }
    }

    private function 上司判断(int $タイプ)
    {
        if ($タイプ === 1) {
            return true;
        } else {
            return false;
        }
    }
}

$会社 = new 会社();
var_dump($会社->お問い合わせ(1));
*/

/*
class A
{
  public function getName(): string
  {
    return 'hoge';
  }
}

class B extends A
{
}

$b = new B();

var_dump($b->getName());
*/







/*
class Animal
{
  protected $鳴き声;

  public function 鳴く(): string
  {
    return $this->鳴き声;
  }
}

class Cat extends Animal
{
  public function __construct()
  {
    $this->鳴き声 = 'みゃー';
  }
}

class Dog extends Animal
{
  public function __construct()
  {
    $this->鳴き声 = 'わんわん';
  }
}

$Cat = new Cat();
$Dog = new Dog();

// var_dump($Cat);
// echo '<br>';
// var_dump($Dog);
// echo '<br>';

var_dump($Cat->鳴く());
echo '<br>';
var_dump($Dog->鳴く());
echo '<br>';


function 喜ばせる(Animal $animal)
{
  echo $animal->鳴く();
}

喜ばせる(new Dog());
*/




// $object->speak($object);
// {
//   function letSpeak();
// }





/*
function letSpeek($object) {
    $object->speek();
}


class American
{
  function speek()
  {
    echo 'hello world';
  }
}

class Japanese
{
    function speek()
    {
        echo 'こんにちわ せかい';
    }
}

letSpeek(new American());
echo '<br>';
letSpeek(new Japanese());

*/



/*
$data = ['山田', '掛谷', '日尾', '本多', '矢吹'];
print $data[3];
echo PHP_EOL;
*/


/*
$data[0] = '山田';
$data[1] = '掛谷';
$data[2] = '日尾';
$data[3] = '本多';
$data[1] = '薄井';//[1]を置き換え
$data[] = '矢吹';//末尾に追加
print $data[4];
// print_r($data);
*/

/*
$data = ['値1', '値2', '値3'];
$data[] = '追加の値' ; //末尾のインデックス番号の、次の番号に収納される
print $data[3]; //「追加の値」が出力される
*/

/*
$data = ['値1', '値2', '値3'];
$data[1] = '値2を置き換えた値4' ; //既存のインデックス番号を指定すると、その番号が置換される
print $data[1]; //「値2を置き換えた値4」が出力される
*/

/*
$data = ['値1', '値2', '値3'];
print_r ($data); //配列内の全ての値が出力される
*/


$users = [
  '田中' => '千葉県幕張市1-1',
  '鈴木' => '東京都千代田区2-1',
  '山中' => '栃木県宇都宮市3-1',
  '細木' => '埼玉県さいたま市4-1',
  '山吹' => '大阪府西成区5-1',
];
//名前の部分を「文字列キー」として管理する
print $users['田中'];   //田中というキーで「千葉県幕張市1-1」が呼び出される





echo PHP_EOL;
