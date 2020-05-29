<?php
$dsn = 'mysql:dbname=renxing;host=localhost';
$user_name = 'root';
$user_psw = 'root';
try {
    $pdo = new PDO($dsn, $user_name, $user_psw);
} catch (PDOException $e) {
    echo 'PDO连接失败：' . $e->getMessage();
}
$query = "delete from employee where id>4";
$affCount = $pdo->exec($query);//执行查询
echo "受影响的行数为：" . $affCount;
