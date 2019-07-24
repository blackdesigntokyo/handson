# インストールしたrequestsをインポートします
import requests

# 取得したいURLを書きます
url = "http://sandream.main.jp/elv_python/first"

# HTTPリクエストを送信してHTMLを取得します
# requestsのgetメソッドでurlを取得、変数responseへ代入
response = requests.get(url)

'''
サーバから返されるエンコーディングが不明な場合に
コンテンツの中身をチェックした上で、適切な文字エンコーディングを
教えてくれます。
その上で、response.encodingにセットしてあげると極力文字化けなどが
おこらないようにしてくれます。
'''
# responseにencodingをかけます。apparent_encodingで。
response.encoding = response.apparent_encoding

# 取得したHTMLを表示します
print(response.text)
