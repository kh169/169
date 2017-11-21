<?php
// ファイルを変数に格納
$filename = 'mission_1-3.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetssの第二引数(バイト数)と第三引数(除外しないタグを指定)は省略可能
  $txt = fgetss($fp);
 
  // ファイルを読み込んだ変数を出力
  echo $txt.'<br>';
 
}
 
// fcloseでファイルを閉じる
fclose($fp);
?>