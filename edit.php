<?php
//�f�[�^�[�x�[�X�ڑ�������͂��܂��B 
$user = "co-797.it.3939.c"; 
$pass = "TfjVU23"; 
$name = $_POST['name2']; 
$comment = $_POST['comment2']; 
$password = $_POST['password3'];
$date = date("H��i��s�b");
$mpass = "SELECT MAX password FROM SNS";

if($mpass == $_POST['password3']){
//try catch�\���ŃG���[��f���o���悤�ɐݒ� 
try { 
if (empty($_GET['id'])) throw new Exception("Error"); 
$ID = (int) $_GET['id']; 
$dbh = new PDO('mysql:host=localhost; dbname=co_707_it_99sv_coco_com; charset=SJIS', $user, $pass); 
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO SNS (number, name, comment, date, password) VALUES (:number, :name, :comment, :date, :password)";
    $stmt = $dbh->prepare($sql);
    $number = "SELECT (@number := @number + 1) AS number FROM SNS";
    $stmt->bindValue(:name, $name, PDO::PARAM_STR);
    $stmt->bindValue(:comment, $comment, PDO::PARAM_STR);
    $stmt->bindValue(:date, $date, PDO::PARAM_STR);
    $stmt->bindValue(:password, $password, PDO::PARAM_STR);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->execute();
    $dbh = null;
} catch (Exception $e) {
    echo "�G���[����: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'SJIS') . "
";
    die();
}
}

?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "SJIS">
<title>�~�b�V����2-15(�ҏW�t�H�[��)</title>
</head>
<body>
<form action = "edit.php" method = "post">
<H1>�ҏW�t�H�[��</H1><br/>
<H2>�ҏW�Ώ۔ԍ�</H2>
<input type = "text" name ="e_number" required><br/>
<H3>���O</H3>
<input type = "text" name ="name2" required><br/>
<H4>�R�����g</H4>
<input type = "text" name ="comment2" required><br/>
<H5>�p�X���[�h</H5>
<input type = "text" name ="password3" required>
<input type = "submit" value ="���M"><br/>
<br/>
<p>
<a href="http://co-707.it.99sv-coco.com/mission_2-15.php">�������N���b�N����ƌ��̃y�[�W�ɔ�т܂��B</a>
</p>
</form>
</body>
</html>
