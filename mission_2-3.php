<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション2-3</title>
</head>
<body>
<form action = "mission_2-3.php" method = "post">
<H1>名前</H1>
<input type = "text" name ="comment1">
<input type = "submit" value ="送信"><br/>
<H2>コメント</H2>
<input type = "text" name ="comment2">
<input type = "submit" value ="送信"><br/>
</form>
</body>
</html>


<?php
$file = 'mission2-2.txt';
$lines = @file($file,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //テキストファイルを配列に格納。改行、空行無視
$c = count($lines);  //配列の要素数をカウント


if($c == 0){  //一行も記述がなければ投稿番号は0
$In = 0;

}else{
//explodeで配列に格納
for($i==0;$i<$c;$i++){
$boards = explode("<>",$lines[$i]);

foreach($boards as $board){
 echo ($board."<br/>");
}
$In = $boards[0];
}
}


if(isset($_POST['comment1'],$_POST['comment2'])){
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];

$date = date("H時i分s秒");

$fp = fopen($file, "a");
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."\n");
fclose($fp);
}
?>