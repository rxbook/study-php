<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$conn->Connect("localhost", "root", "root", "renxing");//连接数据库
$query = "select * from employee";
$result = $conn->Execute($query);//执行查询
foreach ($result as $row) {
    print_r($row);
}
$conn->Close();//关闭连接