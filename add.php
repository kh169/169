<?php 
//データーベース接続情報を入力します。 
$user = "co-797.it.3939.c"; 
$pass = "TfjVU23"; 
$name = $_POST['name']; 
$comment = $_POST['comment']; 
$password = $_POST['password'];
$date = date("H時i分s秒");

//try catch構文でエラーを吐き出すように設定 
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
    echo "データベースへの更新が完了しました。";
} catch (Exception $e) {
    echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'SJIS') . "
";
    die();
}
?>

<!DOCTYPE html>
<body>
<form>
<p>
<a href="http://co-707.it.99sv-coco.com/mission_2-15.php">ここをクリックすると元のページに飛びます。</a>
</p>
</form>
</body>
</html>
