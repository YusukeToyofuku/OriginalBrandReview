# Original Brand Review(h1)
!title(.images/

##概要  

ドラッグストアのオリジナル自社ブランド（プライベートブランド）商品レビューサイトです。
PC,スマホ等の環境でご利用いただけます。  

##デプロイ
###URL:https://original-brand-review.herokuapp.com/
###テストアカウント  
テストアカウント名：Test  
メールアドレス：test@icloud.com  
パスワード：S!n&1BmQKtbWEo9  

テストアカウントでログインするには、トップページ上部にあるログインボタンを押していただき、上記メールアドレスとパスワードを入力してください。
なお、Googleログインもしくはユーザー登録をすることで、テストアカウント以外からもログイン可能です。

＃作成背景
アルバイト先のドラッグストアでプライベートブランドの商品についてお客様から頻繁に質問をいただきました。しかし、ドラッグストアのプライベートブランド商品はマイナーなため、多くの場合ネットに口コミがなく、参考にできる情報がありません。そのため、これを解消するために、当WEBアプリを制作しました。

＃使用技術
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
 
 
 #機能一覧
 ・ログイン機能
 ・Googleログイン機能
 ・キーワード検索機能
 ・カテゴリー別一覧表示機能
 ・商品情報投稿機能
 ・商品情報編集・削除機能
 ・レビュー投稿機能
 ・レビュー削除機能
 
 #工夫点
 ・UI
 　　・スマホ、PC使用時もUIが崩れないようCSSにこだわった。
 　　・UIにボタンを多用し、フロントエンドの操作感を重要視した。
  ・ログインユーザーと非ログインユーザーで表示する機能を変えた。例：ログイン者のみにレビュー投稿ボタンの表示
 ・バックエンド
 　　・レビュー投稿者のみにレビューの削除ボタンを表示するようにした。また、これを実装するためにレビューのIDと投稿者ユーザーIDを紐づけた。
  ・商品情報検索であいまい検索が可能
  
 
 
 
 ＃サイトの利用方法
 ・テストアカウントでのログイン
 
 ・
 
 
