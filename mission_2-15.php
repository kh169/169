<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>ミッション2-15</title>
</head>
<body>
<form action = "add.php" method = "post">
名前<input type = "text" name ="name" required><br/>
コメント<input type = "text" name ="comment" required><br/>
パスワード<input type = "text" name ="password" required>
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "delete.php" method = "post">
削除対象番号<input type = "text" name ="d_number" required><br/>
パスワード<input type = "text" name ="password2" required>
<input type = "submit" value ="送信"><br/>
</form>
<br/>
<Hr>
<form action = "edit.php" method = "post">
編集する<input type = "submit" value ="編集フォームに行く" required><br/>
</form>
<br/>
<Hr>
</body>
</html>


<?php

?>