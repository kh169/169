<?php
//�ȉ��f�[�^�x�[�X�ւ̐ڑ���

//�f�[�^�x�[�X�ɐڑ����邽�߂ɕK�v�ȃf�[�^�\�[�X��ϐ��Ɋi�[
//mysql:host=�z�X�g��;dbname=�f�[�^�x�[�X��;charset=�����G���R�[�h
$dsn = '�f�[�^�x�[�X��';

$user ='���[�U�[��';//�f�[�^�x�[�X�̃��[�U�[��

$password = '�p�X���[�h';//�f�[�^�x�[�X�̃p�X���[�h

$dbname = co_707_it_99sv_coco_com;

// try��PDO(PHP Data Objects)�̏������L�q
try {

 // PDO�C���X�^���X�𐶐�
  $pdo = new PDO($dsn, $user, $password);
 echo "�ڑ�����";

$sql ="SHOW TABLES";
$result = $pdo -> query($sql);
echo $result;
foreach($result as $row){
echo $row[0].'<br>';
}
// �G���[�i��O�j�������������̏������L�q
} catch (PDOException $e) {
 
  echo '�f�[�^�x�[�X�ɃA�N�Z�X�ł��܂���I' . $e->getMessage();// �G���[���b�Z�[�W��\��������
 
  exit;// �����I��
 
}

?>

