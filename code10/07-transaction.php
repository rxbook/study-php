<?php
try {
    $dsn = 'mysql:dbname=renxing;host=localhost';
    $user_name = 'root';
    $user_psw = 'root';
    $pdo = new PDO($dsn, $user_name, $user_psw);
    $pdo->beginTransaction();    //开始事务
    $pdo->exec("update employee set age=28 where id=3 ");
    $pdo->exec("delete from employee where id=5 ");
    $pdo->commit();                //提交事务
} catch (Exception $e) {
    $pdo->rollBack();            //回滚事务
    echo $e->getMessage();
}