こちらのハンズオンで書いたコードです。

【営業こそGASを使え！】Google Apps Script から始めるJavaScript入門

https://sight-visit.connpass.com/event/143605/


## 準備
事前に準備していただいた、こちらのスプレッドシートを自分のアカウントにコピーしてから作業しました。

https://docs.google.com/spreadsheets/d/1w3MgFVugATL2S_yeociPMWGbrbJQBlAVPgk9Y5Q5R8Y/edit#gid=1164252168

## GASの基礎
ファイル：01.gs
シート：GAS
AB列の情報を取得し、プラスした値をC列に記入。偶数奇数判定を行い、D列に記入。

## 課題1
ファイル：p1.gs
シート：Practice1
ABC列の情報を取得し、E列に「_」区切りで記入。完了したらF列に「TRUE」を記入します。

## 課題2
ファイル：p2.gs
シート：Practice2
F列に「TRUE」がある行はそのまま。無い場合のみ、課題1と同じ処理をE列に入力。

## 課題3
ファイル：p3.gs
シート：Practice3
F列が空欄の方のみ、課題1と同じ処理をでE列を入力。
以下のメールを送信する。
件名「{姓}様　LGTMです」、本文「E列の値」
そして、F列にTRUEを入力。
さらに、F列の箇所を変更しても送信できるか試してみる。
