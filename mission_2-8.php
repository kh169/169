<?php
//�ȉ��f�[�^�x�[�X�ւ̐ڑ���

//�f�[�^�x�[�X�ɐڑ����邽�߂ɕK�v�ȃf�[�^�\�[�X��ϐ��Ɋi�[
//mysql:host=�z�X�g��;dbname=�f�[�^�x�[�X��;charset=�����G���R�[�h
$dsn = '�f�[�^�x�[�X��';

$user ='���[�U�[��';//�f�[�^�x�[�X�̃��[�U�[��

$password = '�p�X���[�h';//�f�[�^�x�[�X�̃p�X���[�h


// try��PDO(PHP Data Objects)�̏������L�q
try {

 // PDO�C���X�^���X�𐶐�
  $pdo = new PDO($dsn, $user, $password);
 echo "�ڑ�����";

 $sql = "CREATE TABLE '���i�ꗗ'"
. "("
. "���i�R�[�h CHAR(4),"
. "���i�� CHAR(16),"
. "�P�� INTEGER,"
. "PRIMARY KEY(���i�R�[�h)"
.");";
$result = $pdo->query($sql);

// �G���[�i��O�j�������������̏������L�q
} catch (PDOException $e) {
 
  echo '�f�[�^�x�[�X�ɃA�N�Z�X�ł��܂���I' . $e->getMessage();// �G���[���b�Z�[�W��\��������
 
  exit;// �����I��
 
}

?>