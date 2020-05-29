<?php
include_once("book.class.php");
session_start();//开始会话
$book = new Book();
$book->setbook_number("b0803");
$book->setbook_name("PHP后端开发");
$book->setbook_price(83.5);
$book->setbook_author("任兴PHP笔记");
//将对象book放入Session中
$_SESSION['bookinfo'] = $book;
?>
