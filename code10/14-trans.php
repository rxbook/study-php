<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$conn->Connect("localhost", "root", "root", "renxing");
$query1 = "update employee set age=88 where id=3 ";
$query2 = "update employee set age=99 where id=4 ";
$conn->StartTrans();//开始事务
$conn->Execute($query1);
$conn->Execute($query2);
$conn->CompleteTrans();//结束事务
if ($conn->HasFailedTrans()) {
    echo "事务处理失败";
}
$conn->Close();