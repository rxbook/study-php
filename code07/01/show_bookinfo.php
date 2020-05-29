<?php
include_once("book.class.php");
session_start();
$bookinfo = $_SESSION['bookinfo'];

echo $bookinfo->getbook_number() . '<br>';
echo $bookinfo->getbook_name() . '<br>';
echo $bookinfo->getbook_price() . '<br>';
echo $bookinfo->getbook_author();
?>
