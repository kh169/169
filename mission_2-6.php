
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>�~�b�V����2-6</title>
</head>
<body>
<form action = "mission_2-6.php" method = "post">
<H1>���O</H1>
<input type = "text" name ="comment1"><br/>
<H2>�R�����g</H2>
<input type = "text" name ="comment2"><br/>
<H3>�p�X���[�h</H3>
<input type = "text" name ="password">
<input type = "submit" value ="���M"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-6.php" method = "post">
<H4>�폜�Ώ۔ԍ�</H4>
<input type = "text" name ="d_number"><br/>
<H5>�p�X���[�h</H5>
<input type = "text" name ="password2">
<input type = "submit" value ="���M"><br/>
</form>
<br/>
<Hr>
<form action = "mission_2-6-2.php" method = "post">
<H6>�ҏW����</H6>
<input type = "submit" value ="�ҏW�t�H�[���ɍs��"><br/>
</form>
<br/>
<Hr>
</body>
</html>


<?php
//�~�b�V����2-3
$file = 'mission2-2.txt';
$lines = @file($file);  //,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //�e�L�X�g�t�@�C����z��Ɋi�[�B���s�A��s����
$c = count($lines);  //�z��̗v�f�����J�E���g

//print_r($lines);  //�m�F�p

//���e�ԍ��𐔂���
if($c == 0){  //��s���L�q���Ȃ���Γ��e�ԍ���0
$In = 0;
}else{
//explode�Ŕz��Ɋi�[
for($i = 0 ; $i<$c ; $i++){
$boards = explode("<>",$lines[$i]);
$In = $boards[0];
}
}


if(isset($_POST['comment1'],$_POST['comment2'],$_POST['password'])){  //���O���R�����g,�p�X���[�h�̓��͂�����Γ���
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];
$password = $_POST['password'];

$date = date("H��i��s�b");

$fp = fopen($file, "a");  //�ǂݍ��݁A�������݁B�t�@�C���|�C���^�͍Ō�
fwrite($fp, ++$In."<>".$comment1."<>".$comment2."<>".$date."<>".$password."<>"."\n");
fclose($fp);
}



//�~�b�V����2-4
if(isset($_POST['d_number'])){  //�폜�ԍ��̓��͂�����Γ���
$d_number = $_POST['d_number'];

for($i2 = 0 ; $i2<$c ; $i2++){
$boards2 = explode("<>",$lines[$i2]);

if($d_number == $boards2[0]){
if($boards2[4] == $_POST['password2']){
unset($lines[$i2]);  //�z�񂩂�Ώۂ��폜
file_put_contents($file, $lines);  //�e�L�X�g����Ώۂ��폜

for($i3 = 0 ; $i3<$c ; $i3++){  //�폜���ʂ�\��
$boards3 = explode("<>",$lines[$i3]);
$c2 = count($boards3);
for($i7 = 0 ; $i7<$c2 - 2; $i7++){
echo ($boards3[$i7]."<br/>");
}
}

}else{
echo ("�p�X���[�h���Ԉ���Ă��܂�");
}

}

}

//�~�b�V����2-5
}elseif(isset($_POST['comment3'] , $_POST['comment4'] , $_POST['comment5'])){
$comment3 = $_POST['comment3'];  //�ҏW�Ώ۔ԍ�
$comment4 = $_POST['comment4'];  //���O
$comment5 = $_POST['comment5'];  //�R�����g

for($i4 = 0 ; $i4<$c ; $i4++){
$boards4 = explode("<>",$lines[$i4]);

if($comment3 == $boards4[0]){
if($boards4[4] == $_POST['password3']){
$boards4[1] = $comment4;  //�z��ɕҏW���e���㏑��
$boards4[2] = $comment5;  //�z��ɕҏW���e���㏑��

$board4 = implode("<>",$boards4);

$lines[$i4] = $board4;
file_put_contents($file, $lines);  //�e�L�X�g�ɕҏW���e���㏑��

for($i5 = 0 ; $i5<$c ; $i5++){  //�ҏW���ʂ�\��
$boards5 = explode("<>",$lines[$i5]);
$c3 = count($boards5);
for($i8 = 0 ; $i8<$c3 - 2; $i8++){
echo ($boards5[$i8]."<br/>");
}
}

}else{
echo ("�p�X���[�h���Ԉ���Ă��܂�");
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