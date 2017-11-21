<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション2-5</title>
</head>
<body>
<form action = "mission_2-5.php" method = "post">
<H1>名前/コメント</H1>
<input type = "text" name ="comment1">
<input type = "text" name ="comment2">
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-5.php" method = "post">
<H2>削除対象番号</H2>
<input type = "text" name ="d_number">
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-5-2.php" method = "post">
<H3>編集する</H3>
<input type = "submit" value ="編集フォームに行く"><br/>
</form>
<br/>
<Hr>
</body>
</html>


<?php
//ミッション2-3
$file = 'mission2-2.txt';
$lines = @file($file);  //,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //テキストファイルを配列に格納。改行、空行無視
$c = count($lines);  //配列の要素数をカウント

//print_r($lines);  //確認用

//投稿番号を数える
if($c == 0){  //一行も記述がなければ投稿番号は0
$In = 0;
}else{
//explodeで配列に格納
for($i == 0 ; $i<$c ; $i++){
$boards = explode("<>",$lines[$i]);
$In = $boards[0];
}
}


if(isset($_POST['comment1'],$_POST['comment2'])){  //名前かコメントの入力があれば動く
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];

$date = date("H時i分s秒");

$fp = fopen($file, "a");  //読み込み、書き込み。ファイルポインタは最後
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."\n");
fclose($fp);
}

//ミッション2-4
if(isset($_POST['d_number'])){  //削除番号の入力があれば動く
$d_number = $_POST['d_number'];

for($i2 == 0 ; $i2<$c ; $i2++){
$boards2 = explode("<>",$lines[$i2]);

//print_r($lines);  //確認用

if($d_number == $boards2[0]){
unset($lines[$i2]);  //配列から対象を削除
file_put_contents($file, $lines);  //テキストから対象を削除

for($i3 == 0 ; $i3<$c ; $i3++){  //削除結果を表示
$boards3 = explode("<>",$lines[$i3]);
foreach($boards3 as $board3){
echo ($board3."<br/>");
}
}

}

}

//ミッション2-5
}elseif(isset($_POST['comment3'] , $_POST['comment4'] , $_POST['comment5'])){
$comment3 = $_POST['comment3'];  //編集対象番号
$comment4 = $_POST['comment4'];  //名前
$comment5 = $_POST['comment5'];  //コメント

for($i4 == 0 ; $i4<$c ; $i4++){
$boards4 = explode("<>",$lines[$i4]);

if($comment3 == $boards4[0]){
$boards4[1] = $comment4;  //配列に編集内容を上書き
$boards4[2] = $comment5;  //配列に編集内容を上書き

$board4 = implode("<>",$boards4);

$lines[$i4] = $board4;
file_put_contents($file, $lines);  //テキストに編集内容を上書き

for($i5 == 0 ; $i5<$c ; $i5++){  //編集結果を表示
$boards5 = explode("<>",$lines[$i5]);
foreach($boards5 as $board5){
echo ($board5."<br/>");
}
}

}

}

}else{
for($i6 == 0 ; $i6<$c ; $i6++){
$boards6 = explode("<>",$lines[$i6]);
foreach($boards6 as $board6){
 echo ($board6."<br/>");
}
}
}

?>