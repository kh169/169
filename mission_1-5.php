<?php
if(isset($_GET['comment'])){
$comment = $_GET['comment'];

$filename = 'mission1-5.txt';
$fp = fopen($filename, 'w');
fwrite($fp, $comment);
fclose($fp);
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション1-5</title>
</head>
<body>
<form action = "mission_1-5.php" method = "get">
<input type = "text" name ="comment"><br/>
<input type = "submit" value ="送信">
</form>
</body>
</html>