<?php 
//�f�[�^�[�x�[�X�ڑ�������͂��܂��B 
$user = "co-797.it.3939.c"; 
$pass = "TfjVU23"; 
$name = $_POST['name']; 
$comment = $_POST['comment']; 
$password = $_POST['password'];
$date = date("H��i��s�b");

//try catch�\���ŃG���[��f���o���悤�ɐݒ� 
try { 
$dbh = new PDO('mysql:host=localhost;dbname=co_707_it_99sv_coco_com;charset=SJIS', $user, $pass); 
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO SNS (number, name, comment, date, password) VALUES (:number, :name, :comment, :date, :password)";
    $stmt = $dbh->prepare($sql);
    $number = "SELECT (@number := @number + 1) AS MAX number FROM SNS";
    $stmt->bindValue(:name, $name, PDO::PARAM_STR);
    $stmt->bindValue(:comment, $comment, PDO::PARAM_STR);
    $stmt->bindValue(:date, $date, PDO::PARAM_STR);
    $stmt->bindValue(:password, $password, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
    echo "�f�[�^�x�[�X�ւ̍X�V���������܂����B";
} catch (Exception $e) {
    echo "�G���[����: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'SJIS') . "
";
    die();
}
?>

<!DOCTYPE html>
<body>
<form>
<p>
<a href="http://co-707.it.99sv-coco.com/mission_2-15.php">�������N���b�N����ƌ��̃y�[�W�ɔ�т܂��B</a>
</p>
</form>
</body>
</html>
