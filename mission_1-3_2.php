<?php
// �t�@�C����ϐ��Ɋi�[
$filename = 'mission_1-3.txt';
 
// fopen�Ńt�@�C�����J���i'r'�͓ǂݍ��݃��[�h�ŊJ���j
$fp = fopen($filename, 'r');
 
// while�ōs���܂Ń��[�v����
while (!feof($fp)) {
 
  // fgetss�̑�����(�o�C�g��)�Ƒ�O����(���O���Ȃ��^�O���w��)�͏ȗ��\
  $txt = fgetss($fp);
 
  // �t�@�C����ǂݍ��񂾕ϐ����o��
  echo $txt.'<br>';
 
}
 
// fclose�Ńt�@�C�������
fclose($fp);
?>