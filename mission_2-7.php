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
  $dbh = new PDO($dsn, $user, $password);
 
// �G���[�i��O�j�������������̏������L�q
} catch (PDOException $e) {
 
  echo '�f�[�^�x�[�X�ɃA�N�Z�X�ł��܂���I' . $e->getMessage();// �G���[���b�Z�[�W��\��������
 
  exit;// �����I��
 
}

?>