<?php
//�e�L�X�g�t�@�C���̃p�X�w��
$file = dirname(__FILE__) . '/mission1-6.txt';
//�z��Ɋi�[
$array = @file($file, FILE_IGNORE_NEW_LINES);
//�z��̃f�[�^���o��
print_r($array);
?>