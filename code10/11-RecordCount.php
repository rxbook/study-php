<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');
$conn->Connect("localhost", "root", "root", "renxing");
$query = "select * from employee";
$result = $conn->Execute($query);
echo $result->RecordCount();//行的的个数
echo "<br>";
echo $result->FieldCount();//字段的个数
$conn->Close();