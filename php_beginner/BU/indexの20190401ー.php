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
