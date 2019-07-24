import time
import requests
from bs4 import BeautifulSoup

# URLからHTMLを取得します
url = "http://sandream.main.jp/elv_python/exercises"
response = requests.get(url)
response.encoding = response.apparent_encoding

bs = BeautifulSoup(response.text, 'html.parser')

# ulタグで囲まれた部分を抽出します
ul_tag = bs.find("ul")

# ulタグの中のaタグを抽出します
for a_tag in ul_tag.find_all('a'):
    # aタグのhref属性を取得
    link_url = a_tag['href']
    # 表示します
    # %s 文字の代入に使う　そのあとに％　（タプルを渡す）
    # print('%s'%(link_url))

    # リンクURLのアドレスを代入
    # url2 = "link_url"

    # そのページの　HTMLを取得します
    detail_response = requests.get(link_url)
    detail_response.encoding = detail_response.apparent_encoding
    detail_bs = BeautifulSoup(detail_response.text, 'html.parser')
    # そのページの　pタグに囲まれている部分を取得
    detail_ul_tag = detail_bs.find('p')

    # それをプリント
    print(detail_ul_tag.text)

    # 1秒スリープ
    time.sleep(1)
