<?php
/**
 * PHP函数
 */

/*定义和调用函数*/
echo "【定义和调用函数】<p>";
function example($num, $shu, $x)
{
    return "$num*$shu*$x=" . $num * $shu * $x;
}

echo example(2, 8, 1) . "<br>";
echo example(35, 2, 4) . "<br>";
echo example(27, 168, 7) . "<br>";
echo example(9, 90, 5) . "<br>";

echo "<hr>";
/*在函数间传递参数：值传递、引用传递、默认参数*/
function exam(&$m)
{
    $m = $m * 5 + 10;
    echo "在函数内，\$m=" . $m;
}

$m = 1;
exam($m);
echo "<p>在函数外，\$m=" . $m;

echo "<hr>";
function values($price, $tax = "")
{
    $price = $price + $price * $tax;
    echo "价格为：" . $price . "<br>";
}

values(100, 0.1);
values(100);
values(50, 0.25);

echo "<hr>";

/*使用return()从函数中返回值*/
function money($pri, $tx = 0.45)
{
    $pri = $pri + $pri * $tx;
    //echo "商品的价格为：".$pri."<br>"; //计算商品金额
    return $pri; //返回金额数值
}

echo money(100); //调用函数


echo "<hr>";
/*变量函数*/
function about()
{
    echo "我回来了！<br>";
}

function behaver($b = "Jerry")
{
    echo "$b ，我出去了！<br>";
}

function celver($c)
{
    echo "哇塞又出现了，$c";
}

$func = "about";
$func();

$func = "behaver";
$func("Tom");

$func = "celver";
$func("Yalishanda");


echo "<hr>";
/*对函数的引用*/
function &Test($tmp = 0)
{
    return $tmp;
}

$str =& Test("看到内容了！");
echo $str;

echo "<hr>";

/*取消引用*/
$num = 12345;  //声明一个整型变量
$math =& $num; //声明一个对$num的引用$math
echo "\$math is：" . $math . "<br>"; //输出引用$math
unset($math); //取消引用$math
echo "\$math is：" . $math . "<br>"; //再次输出引用$math
echo "\$num is：" . $num . "<br>"; //输出原变量$num
