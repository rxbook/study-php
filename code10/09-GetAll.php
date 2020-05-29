<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$conn->Connect("localhost", "root", "root", "renxing");//连接数据库
$query = "select * from employee";
$result = $conn->GetAll($query);//获取所有记录
foreach ($result as $row) {
    print_r($row);
}
$conn->Close();//关闭连接