<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');
$conn->Connect("localhost", "root", "root", "renxing");
$query = "select * from employee";
$result = $conn->Execute($query);
print_r($result->FetchField());
$conn->Close();