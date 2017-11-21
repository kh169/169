
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション2-6</title>
</head>
<body>
<form action = "mission_2-6.php" method = "post">
<H1>名前</H1>
<input type = "text" name ="comment1"><br/>
<H2>コメント</H2>
<input type = "text" name ="comment2"><br/>
<H3>パスワード</H3>
<input type = "text" name ="password">
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-6.php" method = "post">
<H4>削除対象番号</H4>
<input type = "text" name ="d_number"><br/>
<H5>パスワード</H5>
<input type = "text" name ="password2">
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-6-2.php" method = "post">
<H6>編集する</H6>
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
for($i = 0 ; $i<$c ; $i++){
$boards = explode("<>",$lines[$i]);
$In = $boards[0];
}
}


if(isset($_POST['comment1'],$_POST['comment2'],$_POST['password'])){  //名前かコメント,パスワードの入力があれば動く
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];
$password = $_POST['password'];

$date = date("H時i分s秒");

$fp = fopen($file, "a");  //読み込み、書き込み。ファイルポインタは最後
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."<>".$password."<>"."\n");
fclose($fp);
}



//ミッション2-4
if(isset($_POST['d_number'])){  //削除番号の入力があれば動く
$d_number = $_POST['d_number'];

for($i2 = 0 ; $i2<$c ; $i2++){
$boards2 = explode("<>",$lines[$i2]);

if($d_number == $boards2[0]){
if($boards2[4] == $_POST['password2']){
unset($lines[$i2]);  //配列から対象を削除
file_put_contents($file, $lines);  //テキストから対象を削除

for($i3 = 0 ; $i3<$c ; $i3++){  //削除結果を表示
$boards3 = explode("<>",$lines[$i3]);
$c2 = count($boards3);
for($i7 = 0 ; $i7<$c2 - 2; $i7++){
echo ($boards3[$i7]."<br/>");
}
}

}else{
echo ("パスワードが間違っています");
}

}

}

//ミッション2-5
}elseif(isset($_POST['comment3'] , $_POST['comment4'] , $_POST['comment5'])){
$comment3 = $_POST['comment3'];  //編集対象番号
$comment4 = $_POST['comment4'];  //名前
$comment5 = $_POST['comment5'];  //コメント

for($i4 = 0 ; $i4<$c ; $i4++){
$boards4 = explode("<>",$lines[$i4]);

if($comment3 == $boards4[0]){
if($boards4[4] == $_POST['password3']){
$boards4[1] = $comment4;  //配列に編集内容を上書き
$boards4[2] = $comment5;  //配列に編集内容を上書き

$board4 = implode("<>",$boards4);

$lines[$i4] = $board4;
file_put_contents($file, $lines);  //テキストに編集内容を上書き

for($i5 = 0 ; $i5<$c ; $i5++){  //編集結果を表示
$boards5 = explode("<>",$lines[$i5]);
$c3 = count($boards5);
for($i8 = 0 ; $i8<$c3 - 2; $i8++){
echo ($boards5[$i8]."<br/>");
}
}

}else{
echo ("パスワードが間違っています");
}

}

}

}else{
for($i6 = 0 ; $i6<$c ; $i6++){
$boards6 = explode("<>",$lines[$i6]);
$c4 = count($boards6);
for($i9 = 0 ; $i9<$c4 - 2; $i9++){
echo ($boards6[$i9]."<br/>");
}
}
}

?>