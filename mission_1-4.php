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
<title>�~�b�V����1-4�iGET)</title>
</head>
<body>
<form action = "mission_1-4.php" method = "get">
<input type = "text" name ="comment"><br/>
<input type = "submit" value ="���M">
</form>
</body>
</html>