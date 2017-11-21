<?php
$lines = file('mission2-2.txt');  //テキストファイルを配列に格納
$c = count($lines);  //配列の要素数をカウント

if($c == 0){  //一行も記述がなければ投稿番号は0
$In = 0;

}else{
for($i==0;$i<$c;$i++){  //explodeで配列に格納
$boards = explode("<>",$lines[$i]);
$In = $boards[0];
}
}


if(isset($_GET['comment1'],$_GET['comment2'])){
$comment1 = $_GET['comment1'];
$comment2 = $_GET['comment2'];

$date = date("H時i分s秒");
$filename = 'mission2-2.txt';

$fp = fopen($filename, "a");
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."\n");
fclose($fp);
}
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション2-2</title>
</head>
<body>
<form action = "mission_2-2.php" method = "get">
<H1>名前</H1>
<input type = "text" name ="comment1">
<input type = "submit" value ="送信"><br/>
<H2>コメント</H2>
<input type = "text" name ="comment2">
<input type = "submit" value ="送信"><br/>
</form>
</body>
</html>