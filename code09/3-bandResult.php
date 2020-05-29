<?php
$mysqli = new mysqli("localhost", "root", "root", "renxing");
$query = "select * from employee";
$result = $mysqli->prepare($query);// 进行预准备语句查询
$result->execute();                 //执行预准备语句
$result->bind_result($id, $name, $address, $age);//绑定结果
while ($result->fetch()) {
    echo $id . ',';
    echo $name . ',';
    echo $address . ',';
    echo $age . '<br>';
}
$result->close();//关闭预准备语句
$mysqli->close();//关闭连接
