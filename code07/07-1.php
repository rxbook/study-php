<?php
/**
 * PHP的cookie
 * setcookie()函数定义一个和其余HTTP头一起发送的Cookie，它必须最先输出，在任何脚本输出之前包括<html>和<head>标签。
 * 如果在setcookie()函数之前有任何的输出，那么setcookie就会失败并返回false。因此本程序不能添加标题，否则程序出错。
 * ======================================运行结果=======================================
 * 运行本实例，在Cookies文件夹下会自动生成一个Cookie文件，名为“administrator@1[1].txt”，
 * Cookie的有效期为60秒，在Cookie失效后，Cookies文件自动删除。
 * 说明：运行结果会因为本机使用的用户名不同，生成的Cookie文件会有所不同。
 */
date_default_timezone_set("PRC");
/*使用setcookie()函数创建Cookie*/
setcookie("TMCookie", 'www.baidu.com');
setcookie("TMCookie", 'www.baidu.com', time() + 60); //设置Cookie的有效时间为60秒
setcookie("TMCookie", 'test', time() + 3600, "tm", ".baidu.com", 1);

//setcookie("TMCookie",'www.baidu.com',time()-5); //--此代码：删除Cookie