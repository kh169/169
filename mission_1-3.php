<?php
// �t�@�C����ϐ��Ɋi�[
$filename = 'kadai.txt';
 
// fopen�Ńt�@�C�����J���i'r'�͓ǂݍ��݃��[�h�ŊJ���j
$fp = fopen($filename, 'r');
 
// while�ōs���܂Ń��[�v����
while (!feof($fp)) {
 
  // fgets�Ńt�@�C����ǂݍ��݁A�ϐ��Ɋi�[
  $txt = fgets($fp);
 
  // �t�@�C����ǂݍ��񂾕ϐ����o��
  echo $txt.'<br>';
 
}
 
// fclose�Ńt�@�C�������
fclose($fp);
?>