<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'ubuntumysqlnnaoya';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
​    
    $id = $_GET['id'];

    $sql = "delete from user where id=:id";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id);
    $stmt->execute($params);

    header('Location: index.php?fg=1')
} catch (PDOException $e) {
    // echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=1?err=$e->getMessage()')
    exit();
}
?>