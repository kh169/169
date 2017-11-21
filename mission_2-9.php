<?php
//以下データベースへの接続文

//データベースに接続するために必要なデータソースを変数に格納
//mysql:host=ホスト名;dbname=データベース名;charset=文字エンコード
$dsn = 'データベース名';

$user ='ユーザー名';//データベースのユーザー名

$password = 'パスワード';//データベースのパスワード

$dbname = co_707_it_99sv_coco_com;

// tryにPDO(PHP Data Objects)の処理を記述
try {

 // PDOインスタンスを生成
  $pdo = new PDO($dsn, $user, $password);
 echo "接続成功";

$sql ="SHOW TABLES";
$result = $pdo -> query($sql);
echo $result;
foreach($result as $row){
echo $row[0].'<br>';
}
// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {
 
  echo 'データベースにアクセスできません！' . $e->getMessage();// エラーメッセージを表示させる
 
  exit;// 強制終了
 
}

?>

