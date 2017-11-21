<?php
if(isset($_GET['comment'])){
$comment = $_GET['comment'];
echo $comment;
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション1-4（GET)</title>
</head>
<body>
<form action = "mission_1-4.php" method = "get">
<input type = "text" name ="comment"><br/>
<input type = "submit" value ="送信">
</form>
</body>
</html>