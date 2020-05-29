<?php
$db_host = "localhost";//服务器
$db_user = "root";//用户名
$db_psw = "root";//密码
$db_name = "renxing";//数据库名
$mysqli = new mysqli($db_host, $db_user, $db_psw, $db_name);
$query = "select * from employee where id < ?";
$result = $mysqli->prepare($query);
$result->bind_param("i", $id);//绑定参数
$id = 4;
$result->execute();
$result->bind_result($id, $name, $address, $age);//绑定参结果
while ($result->fetch()) {
    echo $id . "<br>";
    echo $name . "<br>";
    echo $address . "<br>";
    echo $age . "<br>";
    echo "<hr>";
}
$result->close();
$mysqli->close();
?>
