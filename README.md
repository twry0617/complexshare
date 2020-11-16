# complex_share
自分の悩みを相談するアプリ

過去のcommitはこちらのURLにまとめております。
https://github.com/twry0617/complex_share

 
# アプリケーション概要
 
Laravelを使ったアプリケーションで自分の悩みを投稿することができるサービスです  

デモサイトをご利用ください

ログインID: test@test.com

パスワード: test1234

# 画像イメージ
 <img width="1426" alt="スクリーンショット 2020-10-23 23 16 46" src="https://user-images.githubusercontent.com/62969621/97876870-bfafcc00-1d5f-11eb-8d43-126398267ddd.png">


 
# 機能一覧
* 新規登録・ログイン・ログアウト・パスワードリマインダ
* 投稿に関するCRUD機能
* マイページ(自分が投稿した内容が表示される)
* ページネーション
* 多対多のリレーション（中間テーブル使用）
* お気に入り機能
* 退会機能
* チャット機能
 
# 使用した言語・技術
 
* インフラ
  *  AWS(VPC,EC2,Route53,RDS,S3)
* フロントエンド
  *  HTML / CSS / SCSS / JavaScript / jQuery
* バックエンド
  *  PHP 7.3 / Laravel 5.8
* データベース
  *  mysql 8.0
* その他
  *  docker / docker-compose / Laravelecho / pusher
 
# 使い方
 * ホーム画面からログインもしくは新規登録する
 * 投稿一覧から新規登録したり他の人の投稿を閲覧することができる
 * 投稿したユーザーのみ編集削除することができる(コメントは削除のみ)
 * 投稿した記事にいいねをすることができる
 * 退会ページに遷移して退会することができる
 * マイページで自分が投稿した内容とコメントが表示される
 * 複数人でチャットすることができるユーザー名が表示されるようになっている。
 
 
# インフラ構成図
 
![Untitled Diagram](https://user-images.githubusercontent.com/62969621/97927697-d4648200-1da8-11eb-8b9d-8118851939a9.jpg)
 
# 作者
 
* 作成者　若松 竜也

* Twitter @twsoccer_15
