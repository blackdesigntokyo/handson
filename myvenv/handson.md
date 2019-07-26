Let’s start Python #2
https://elv.connpass.com/event/139238/

こちらのハンズオンで書いたコードです。
（今回のハンズオンでスクレイピングするwebページは、すべて講師の方が用意していただいたものですので、法的に問題なく実習を進めることができました）

内容をまとめたブログ
https://seminar.blackdesign.jp/286


## sc_1.py
あるwebページの、htmlコードを取得するプログラムです。
URLを変数に入れ、requestsのgetメソッドでurlを取得し、変数responseへ代入。
そして文字化け防止のためにエンコーディングをかけます。


## sc_2.py
同様に、csv情報を抜き出す事も可能です。


## sc_3.py
for文を使用し、連続して抜き出します

## sc_4.py
BeautifulSoup4ライブラリをインストールします
$ pip install BeautifulSoup4

呼び出すには
from bs4 import BeautifulSoup

BeautifulSoupのインスタンス
bs = BeautifulSoup(response.text, 'html.parser')

BeautifulSoup4は、htmlの構文解釈のライブラリです。出来ることは「ulタグで囲まれた部分を抽出」「aタグのテキストを取得」「aタグのhref属性を取得」などです。
	
このwebページから、リンク（aタグ）のテキストとリンク先を取得して表示してみます。
http://sandream.main.jp/elv_python/second

ulタグで囲まれた部分を抽出します
ul_tag = bs.find('ul')


## sc_5.py
クローリング
http://sandream.main.jp/elv_python/exercises
の中のリンク先に記載されている、pタグ内のテキストだけを表示します。

進め方としては、まずulタグで囲まれた部分を抽出します。
（ここからはfor文でまわします）
aタグのhref属性を取得し、そこからhtmlを取得。
そこからpタグを取得し、それをプリントします。


