<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>�~�b�V����2-3</title>
</head>
<body>
<form action = "mission_2-3.php" method = "post">
<H1>���O</H1>
<input type = "text" name ="comment1">
<input type = "submit" value ="���M"><br/>
<H2>�R�����g</H2>
<input type = "text" name ="comment2">
<input type = "submit" value ="���M"><br/>
</form>
</body>
</html>


<?php
$file = 'mission2-2.txt';
$lines = @file($file,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //�e�L�X�g�t�@�C����z��Ɋi�[�B���s�A��s����
$c = count($lines);  //�z��̗v�f�����J�E���g


if($c == 0){  //��s���L�q���Ȃ���Γ��e�ԍ���0
$In = 0;

}else{
//explode�Ŕz��Ɋi�[
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

$date = date("H��i��s�b");

$fp = fopen($file, "a");
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."\n");
fclose($fp);
}
?>