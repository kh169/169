<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>�~�b�V����2-4</title>
</head>
<body>
<form action = "mission_2-4.php" method = "post">
<H1>���O</H1>
<input type = "text" name ="comment1">
<H2>�R�����g</H2>
<input type = "text" name ="comment2">
<input type = "submit" value ="���M"><br/>
</form>
<br/>
<br/>
<br/>
<form action = "mission_2-4.php" method = "post">
<H3>�폜�Ώ۔ԍ�</H3>
<input type = "text" name ="d_number">
<input type = "submit" value ="���M"><br/>
</form>
</body>
</html>


<?php
//�~�b�V����2-3
$file = 'mission2-2.txt';
$lines = @file($file);  //,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //�e�L�X�g�t�@�C����z��Ɋi�[�B���s�A��s����
$c = count($lines);  //�z��̗v�f�����J�E���g

//print_r($lines);  //�m�F�p

if($c == 0){  //��s���L�q���Ȃ���Γ��e�ԍ���0
$In = 0;

}else{
//explode�Ŕz��Ɋi�[
for($i == 0 ; $i<$c ; $i++){
$boards = explode("<>",$lines[$i]);

foreach($boards as $board){  //�\��
 echo ($board."<br/>");
}
$In = $boards[0];
}
}


if(isset($_POST['comment1'],$_POST['comment2'])){  //���O���R�����g�̓��͂�����Γ���
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];

$date = date("H��i��s�b");

$fp = fopen($file, "a");  //�ǂݍ��݁A�������݁B�t�@�C���|�C���^�͍Ō�
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."\n");
fclose($fp);

//�~�b�V����2-4
}elseif(isset($_POST['d_number'])){
$d_number = $_POST['d_number'];

for($i2 == 0 ; $i2<$c ; $i2++){
$boards2 = explode("<>",$lines[$i2]);

//print_r($lines);  //�m�F�p

if($d_number == $boards2[0]){
unset($lines[$i2]);
file_put_contents($file, $lines);

for($i3 == 0 ; $i3<$c ; $i3++){  //�폜���ʂ�\��
$boards3 = explode("<>",$lines[$i3]);
foreach($boards3 as $board3){
echo ($board3."<br/>");
}
}

}
}
}



?>