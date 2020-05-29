<?php
$dsn = 'mysql:dbname=renxing;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query = "select * from employee";
foreach ($pdo->query($query) as $row) {//输出结果集中的数据
    echo $row['id'] . '  ';
    echo $row['name'] . '  ';
    echo $row['address'] . '  ';
    echo $row['age'] . '<br>';
}