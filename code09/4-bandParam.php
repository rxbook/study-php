<?php
$db_host = "localhost";//服务器
$db_user = "root";//用户名
$db_psw = "root";//密码
$db_name = "renxing";//数据库名
$mysqli = new mysqli($db_host, $db_user, $db_psw, $db_name);
$query = "insert into employee (name,address,age) values (?,?,?)";
$result = $mysqli->prepare($query);
$result->bind_param("ssi", $name, $address, $age);//绑定参数
$name = 'sy0807';
$address = 'employee7';
$age = 20;
$result->execute();//执行预准备语句
$result->close();
$mysqli->close();
?> 
