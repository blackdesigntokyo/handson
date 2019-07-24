# インストールしたrequestsをインポートします
import requests

# 取得したいURLを書きます
url = "http://sandream.main.jp/elv_python/train.csv"

# HTTPリクエストを送信してHTMLを取得します
response = requests.get(url)
response.encoding = response.apparent_encoding

# 取得したHTMLを表示します
print(response.text)
