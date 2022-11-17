# Original Brand Review
![IMG_0372 3](https://user-images.githubusercontent.com/110439048/202403741-77afdd22-017e-4e03-9d07-5703ee273483.jpg)

## 概要  

ドラッグストアのオリジナル自社ブランド（プライベートブランド）商品レビューサイトです。

PC,スマホ等の環境でご利用いただけます。  

## 作成背景
アルバイト先のドラッグストアでプライベートブランドの商品についてお客様から頻繁に質問をいただきました。しかし、ドラッグストアのプライベートブランド商品はマイナーなため、多くの場合ネットに口コミがなく、参考にできる情報がありません。そのため、これを解消するために、当WEBアプリを制作しました。

## 使用技術  
・フレームワーク  
-Laravel  
・言語  
-PHP  
-HTML/CSS  
-Mysql  
・開発環境  
-AWS  
 -EC2  
 ・デプロイ環境  
-Heroku  
 
 
 ## 機能一覧  
 ・ログイン機能  
 ・Googleログイン機能  
 ・キーワード検索機能  
 ・ドラッグストア別一覧表示機能
 ・カテゴリー別一覧表示機能  
 ・商品詳細＆レビュー一覧表示機能
 ・商品情報投稿機能  
 ・商品情報編集・削除機能  
 ・レビュー投稿機能  
 ・レビュー削除機能  
 
 ## 工夫点 
 ### フロントエンド 
・スマホ、PC使用時もUIが崩れないようCSSにこだわった。  
・UIにボタンを多用し、フロントエンドの操作感を重要視した。  
・レビューの星評価を星の図形選択式にして直感的にレビューできるようにした。
・ログインユーザーと非ログインユーザーで表示する機能を変えた。例：ログイン者のみにレビュー投稿ボタンの表示  
 ### バックエンド  
・レビュー投稿者のみにレビューの削除ボタンを表示するようにした。また、これを実装するためにレビューのIDと投稿者ユーザーIDを紐づけた。  
・レビューはそれぞれの商品につき1人1回のみになるように、ログインユーザーかつその商品未レビュー投稿者のみにレビュー投稿ボタンが表示されるようにした。
・商品情報検索であいまい検索が可能  

# デプロイ
### URL:https://original-brand-review.herokuapp.com/
### テストアカウント  
#### テストアカウント名：Test  
#### メールアドレス：test@icloud.com  
#### パスワード：S!n&1BmQKtbWEo9
*テストアカウントでログインするには、トップページ上部にあるログインボタンを押していただき、上記メールアドレスとパスワードを入力してください。
なお、Googleログインもしくはユーザー登録をすることで、テストアカウント以外からもログイン可能です。　　
 
 ## サイトの利用方法
 ### テストアカウントでのログイン   
![login](https://user-images.githubusercontent.com/110439048/202408557-77ac4e24-09b9-4d1b-a03f-ebef4a1699df.gif)  
手順1：トップページ右上のログインをクリック　　  
手順2：ログインしたいアカウントのメールアドレスとパスワードを入力し、LOGINのボタンをクリック  

 ### 商品の検索  
 ![search](https://user-images.githubusercontent.com/110439048/202412765-56a128e0-5ba0-4df9-b97f-f89a1d7fe9c7.gif)  
 手順1：検索ボックスに検索したいキーワードを入力　　  
 手順2：検索ボックス隣の検索ボタンをクリック  
 
 ### 商品の投稿（ログイン後のトップページ）
 <img width="1440" alt="スクリーンショット 2022-11-17 18 33 31" src="https://user-images.githubusercontent.com/110439048/202410254-6b1bff05-81c0-4014-bdbe-07c462e71851.png">  
<img width="1440" alt="スクリーンショット 2022-11-17 18 35 40" src="https://user-images.githubusercontent.com/110439048/202410281-77c18bd7-1527-482c-aca3-271b725d92ad.png">  
 手順1：トップページのオレンジ色の商品新規追加ボタンをクリック  
 手順2：商品詳細情報を入力  
 手順3：画面下の商品投稿ボタンをクリック  
 注意点：商品新規追加ボタンはログイン者にしか表示されません。  
 
 ### レビューの投稿（ログイン後の商品詳細ページ）  
 ![review](https://user-images.githubusercontent.com/110439048/202413039-e72b5e1f-b3e3-46c0-90c8-e5a7e5e7429d.gif)   
 手順1：商品詳細ページにあるレビュー投稿フォームに内容を入力＆星を選択  
 手順2：レビューを投稿  
 注意点：レビュー投稿フォームはログイン者かつその商品にレビューを投稿していないユーザーにのみ表示されます。  
 
 
