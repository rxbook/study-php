<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');
$conn->debug = true;
$conn->Connect("localhost", "root", "root", "renxing");
$query = "select * from employee ";
$result = $conn->Execute($query);
$conn->Close();