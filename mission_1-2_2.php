<?php
$filename = 'kadai2.txt';
//echo $filename

$fp = fopen($filename, 'a');

fwrite($fp, "Hello world\n");

fclose($fp);

?>
