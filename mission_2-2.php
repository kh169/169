<?php
$lines = file('mission2-2.txt');  //�e�L�X�g�t�@�C����z��Ɋi�[
$c = count($lines);  //�z��̗v�f�����J�E���g

if($c == 0){  //��s���L�q���Ȃ���Γ��e�ԍ���0
$In = 0;

}else{
for($i==0;$i<$c;$i++){  //explode�Ŕz��Ɋi�[
$boards = explode("<>",$lines[$i]);
$In = $boards[0];
}
}


if(isset($_GET['comment1'],$_GET['comment2'])){
$comment1 = $_GET['comment1'];
$comment2 = $_GET['comment2'];

$date = date("H��i��s�b");
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
<title>�~�b�V����2-2</title>
</head>
<body>
<form action = "mission_2-2.php" method = "get">
<H1>���O</H1>
<input type = "text" name ="comment1">
<input type = "submit" value ="���M"><br/>
<H2>�R�����g</H2>
<input type = "text" name ="comment2">
<input type = "submit" value ="���M"><br/>
</form>
</body>
</html>