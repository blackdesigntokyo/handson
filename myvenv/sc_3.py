# インストールしたrequestsをインポートします
import time
import requests

# 取得したいURLを書きます
url_list = [
    "http://sandream.main.jp/elv_python/train.csv"
    "http://sandream.main.jp/elv_python/first"
    ]

# for文で順番に取り出しましょう
for url in url_list:
    # HTMLの取得と表示
    response = requests.get(url)
    response.encoding = response.apparent_encoding

    print(response.text)
    # 1秒スリープ
    time.sleep(1)
