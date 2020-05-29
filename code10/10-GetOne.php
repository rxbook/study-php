<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$conn->Connect("localhost", "root", "root", "renxing");//连接数据库
$query = "select * from employee where id=4";
$result = $conn->GetOne($query); //取得第一个字段的值
echo $result;
$conn->Close();//关闭连接