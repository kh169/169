<?php
if(isset($_GET['comment'])){
$comment = $_GET['comment'];

$filename = 'mission1-6.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $comment."\n");
fclose($fp);
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>�~�b�V����1-6</title>
</head>
<body>
<form action = "mission_1-6.php" method = "get">
<input type = "text" name ="comment"><br/>
<input type = "submit" value ="���M">
</form>
</body>
</html>