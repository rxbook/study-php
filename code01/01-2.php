<?php
/**
 * PHP常量
 */

/**
 * 使用define()函数定义一个常量
 * 使用constant()函数动态获取常量的值
 * 使用dedined()函数判断常量是否被定义
 */
define("MESSAGE", "这是常量"); //定义常量
echo MESSAGE . "<br>"; //输出常量
echo Message . "<br><br>"; //输出一个没有定义的常量

define("COUNT", "显示多次忽略大小写", true);
echo COUNT . "<br>";  //输出常量COUNT
echo Count . "<br>";  //输出常量COUNT
echo couNT . "<br><br>"; //输出常量COUNT

$name = "couNt";
echo constant($name) . "<br><br>";   //输出常量COUNT

echo defined("MESSAGE") . "<br><br>";  //如果常量被定义，返回true，显示1.
echo defined("Message");  //如果常量未被定义，返回false，不显示.

/*PHP中的预定义常量*/
echo "当前文件路径：" . __FILE__ . "<br>";
echo "当前行数：" . __LINE__ . "<br>";
echo "当前PHP版本信息：" . PHP_VERSION . "<br>";
echo "当前操作系统：" . PHP_OS;


/**字符串运算符
 * 1.使用英文句号.的时候，会将两个字符串连在一起
 * 2.使用+的时候，会进行运算。
 */
$a = "3.1415926r*r"; //声明字符串变量
$b = 23; //声明整型变量
$m = $a . $b;  //使用.运算符将两个变量连接
echo $m . "<br>";

$n = $a + $b; //使用+符号进行运算
echo $n;

echo "<hr>";

/*逻辑运算符*/
$i = true;
$j = true;
$k = false;

if ($i || $j && $k) {
    echo "结果为真！";
} else {
    echo "结果为假！！";
}
echo "<br>";
if (($i || $j) && $k) {
    echo "结果为真！";
} else {
    echo "结果为假！！";
}
echo "<hr>";

/*比较运算符*/
$value = "100"; //字符串型的变量“100”。

echo "\$value==100:";
if ($value == 100)
    echo "true";
else echo "false";

echo "<p>";

echo "\$value==true:";
if ($value == true)
    echo "true";
else echo "false";


echo "<p>";

echo "\$value!=null:";
if ($value == true)
    echo "true";
else echo "false";


echo "<p>";

echo "\$value==false:";
if ($value == false)
    echo "true";
else echo "false";

echo "<p>";

echo "\$value===100:";
if ($value === 100)
    echo "true";
else echo "false";

echo "<p>";

echo "\$value===true:";
if ($value === true)
    echo "true";
else echo "false<p>";

echo "<p>";

echo "10/2.0!==5:";
if (10 / 2.0 !== 5)
    echo "true";
else echo "false<p>";

echo "<hr>";

/*使用@符号屏蔽错误运算符，但问题并没有解决，只是看不到而已！*/
@$err = 65 / 0;
echo $err;

/*三元运算符*/
$num = 100;
echo ($num > 99) ? '结果为真' : '结果为假';