<?php
$dsn = 'mysql:dbname=renxing;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query = "select * from employee";
$result = $pdo->prepare($query);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
print_r($row);
