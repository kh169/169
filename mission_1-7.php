<?php
//テキストファイルのパス指定
$file = dirname(__FILE__) . '/mission1-6.txt';
//配列に格納
$array = @file($file, FILE_IGNORE_NEW_LINES);
//配列のデータを出力
print_r($array);
?>