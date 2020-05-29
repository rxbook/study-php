<?php

/**
 * PHP的数据类型
 */
/*局部变量*/
$ex = "在.....函数外"; //声明全局变量
function example()
{
    $ex = "...在函数内..."; //生命局部变量
    echo "在函数内输出的内容是：" . $ex . "<br>"; //输出局部变量
}

example(); //调用函数，输出变量值
echo "在函数外输出的内容是：" . $ex . "<br>";

echo "<hr>";

/*3.15 全局变量的使用*/
$xy = "这是第一种方案！"; //声明全局变量$xy
$xy2 = "这是第二种方案！"; //声明全局变量$xy2

function fuc()
{
    echo $xy . "<br>"; //$xy没有被调用，不能输出
    global $xy2; //使用global关键字定义全局变量
    echo $xy2;   //这里调用$xy2，可以输出
}

fuc();

echo "<hr>";

/*静态变量*/
function zdy()
{
    static $msg = 0;//初始化静态变量
    $msg += 1; //静态变量加1
    echo $msg . " "; //输出静态变量
}
function zdy1()
{
    $msg = 0;//声明函数内部变量（局部变量）
    $msg += 1; //局部变量加1
    echo $msg . " "; //输出局部变量
}
for ($i = 0; $i < 10; $i++) {
    zdy(); //输出结果为1~10
}
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    zdy1(); //输出结果为10个1
}

echo "<hr>";

/*可变变量，多加一个$美元符号*/
$a = "word";
$word = "I want to eat.....";
echo $a . "<br>";
echo $$a;

echo "<hr><hr>";

$a = 45;
$b = 347;
if ($a > $b) {
    echo "前者大于后者！";
} else {
    echo "后者大于前者！";
}

echo "<hr>";

/*单引号输出和双引号输出的区别*/
$a = "单引号输出和双引号输出的区别！";

echo "$a";//双引号输出调用的结果内容

echo "<br>";

echo '$a'; //单引号输出引号内的内容

echo "<hr>";

/*使用定界符输出变量*/
$a = '这是要显示的内容！';
echo <<<std
	这和双引号没有区别的，\$a同样可以被输出 <p>
	\$a的内容为：$a
std;

echo "<hr>";

/*空值Null的使用*/
$str1 = null; //$str1直接被赋值为null
if (is_null($str1)) {
    echo "\$str1=null";
} else {
    echo "\$str1不为空！";
}

echo "<br>";

if (is_null($str2)) //$str2未被声明
{
    echo "\$str2=null";
} else {
    echo "\$str2不为空！";
}

echo "<hr>";

$str3 = 'str'; //$str3被赋值为str
if (is_null($str3)) {
    echo "\$str3=null";
} else {
    echo "\$str3不为空！";
}
echo "<br>";
unset($str3); //使用unset()函数释放$str3
if (is_null($str3)) {
    echo "被unset()函数处理之后，\$str3=null";
} else {
    echo "被unset()函数处理之后，\$str3不为空！";
}

echo "<hr>";

/**
 * 【转换数据类型】
 * 使用integer操作符能直接输出转换后的变量名，
 * 并且原变量不发生任何变化。
 * 而使用settype()函数返回的是1，也就是true，
 * 原变量被改变了。
 */
$num = "3.1415926535r**r58";
echo "使用integer转换类型后的结果是：";
echo (integer)$num;
echo "<p>";
echo "转换后输出变量\$num的值：" . $num;
echo "<p>";
echo "使用settype()函数转换后的结果是：";
echo settype($num, 'integer');
echo "<p>";
echo "转换后输出变量\$num的值：" . $num;
echo "<p>";
