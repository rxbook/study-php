<?php
$dsn = 'mysql:dbname=renxing;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->exec("update mytable set age=28 where id=1 ");//表mytable不存在
echo "errorCode为： " . $pdo->errorCode(); //输出：errorCode为： 42S02
//print_r($pdo->errorInfo());