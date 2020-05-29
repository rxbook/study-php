<?php
/**
 * PHP session
 */
session_cache_limiter('private');
$cache_limit = session_cache_limiter(); //开启客户端缓存
session_cache_expire(30);
$cache_expire = session_cache_expire(); //开启客户端缓存时间

session_start();      //初始化session
unset($_SESSION["user"]); //删除用户名会话变量
unset($_SESSION["pwd"]);  //删除密码会话变量
session_destroy();  //删除当前所有的会话变量
header("location:index.php"); //跳转到用户登录页面