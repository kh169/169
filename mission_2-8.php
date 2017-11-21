<?php
//以下データベースへの接続文

//データベースに接続するために必要なデータソースを変数に格納
//mysql:host=ホスト名;dbname=データベース名;charset=文字エンコード
$dsn = 'データベース名';

$user ='ユーザー名';//データベースのユーザー名

$password = 'パスワード';//データベースのパスワード


// tryにPDO(PHP Data Objects)の処理を記述
try {

 // PDOインスタンスを生成
  $pdo = new PDO($dsn, $user, $password);
 echo "接続成功";

 $sql = "CREATE TABLE '商品一覧'"
. "("
. "商品コード CHAR(4),"
. "商品名 CHAR(16),"
. "単価 INTEGER,"
. "PRIMARY KEY(商品コード)"
.");";
$result = $pdo->query($sql);

// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {
 
  echo 'データベースにアクセスできません！' . $e->getMessage();// エラーメッセージを表示させる
 
  exit;// 強制終了
 
}

?>