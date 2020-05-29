<?php
/**
 * 条件判断 和 循环
 */
/*if语句生成随机数，判断该随机数是不是偶数*/
$num = rand(1, 100); //1到100的随机数
if ($num % 2 == 0) {
    echo "\$num=$num<br>";
    echo "\$num 是偶数！";
} else {
    echo "\$num=$num<br>";
    echo "\$num 不是偶数！";
}

echo "<hr>";


/*else if 语句判断今天是这个月的上中下旬*/
$month = date('n'); //月份变量
$today = date('j'); //日期变量
if ($today >= 1 && $today <= 10) {
    echo "今天是" . $month . "月" . $today . "日，这个月的上旬！";
} else if ($today > 10 && $today <= 20) {
    echo "今天是" . $month . "月" . $today . "日，这个月的中旬！";
} else {
    echo "今天是" . $month . "月" . $today . "日，这个月的下旬！";
}
echo "<hr>";


setlocale(LC_TIME, "chs");   //设置本地环境
$week = strftime("%A");  //声明变量$week的值
switch ($week) //switch语句
{
    case "星期一":
        echo "今天是$week";
        break;
    case "星期二":
        echo "今天是$week";
        break;
    case "星期三":
        echo "今天是$week";
        break;
    case "星期四":
        echo "今天是$week";
        break;
    case "星期五":
        echo "今天是$week";
        break;
    default:
        echo "今天是{$week}，可以休息了！";
        break;
}
echo "<br>";

/*while循环语句，输出10以内的偶数*/
$num = 1;  //声明整型变量
$str = "10以内的偶数为：";  //声明字符串变量
while ($num <= 10)  //判断变量$num是否小于10
{
    if ($num % 2 == 0)  //如果小于10，则判断其是否为偶数
    {
        $str .= $num . " ";  //如果条件成立，则添加到字符变量$str的后面
    }
    $num++;  //变量$num加1
}
echo $str;  //循环结束后，输出字符串$str.

echo "<hr>";

/*while和do...while的区别*/
$x = 1;
while ($x != 1) {
    echo "while输出内容不会看到！";
}

do {
    echo "do...while输出内容会看到！";
} while ($x != 1);

echo "<hr>";

/*通过for循环计算10的阶乘*/
$shu = 1;
for ($i = 1; $i <= 10; $i++) {
    $shu *= $i;
}
echo "10的阶乘为" . $shu . "<br>";

echo "<hr>";

/*foreach循环遍历数组*/
$arr = array("My", "Name", "is", "raining", "in", "School"); //声明数组变量
if (is_array($arr) == true) {
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
} else {
    echo "变量\$arr不是数组，不能用foreach语句";
}

echo "<hr>";

/*流程控制的另一种书写格式：endif;、endwhile;、endfor、endswitch*/
/*判断100以内的素数――经典！*/
$ss = 2; //声明最小的素数
$max = 100; //声明变量$max，赋值为最大的范围
$arr = array(); //声明一个数组$arr
echo $max . "以内的素数为：";

while ($ss < $max) //判断变量是否在允许的范围内
{
    $boo = false; //声明一个布尔变量，初始为false
    foreach ($arr as $value) //使用foreach语句遍历$arr数组
    {
        if ($ss % $value == 0) //判断变量$ss能否被数组元素整除
        {
            $boo = true; //将布尔变赋值为true
            break; //跳出当前循环
        }
    }
    if (!$boo)  //判断变量$boo的值
    {
        echo $ss . " "; //如果$boo为假，说明$aa为素数，输出
        $arr[count($arr)] = $ss;  //同时存到数组中
    }
    $ss++;  //变量$ss加1
}


echo "<hr>";

/*使用break关键字跳出循环*/
while (true) {
    $tmp = rand(1, 20);  //声明一个1到20之间的随机数
    echo $tmp . " ";  //输出这些随机数
    if ($tmp == 10) //判断：当随机数等于10的时候
    {
        echo "<br>变量等于10，终止循环！";
        break;
    }
}

echo "<hr>";

/*break语句可以设定跳出到第几层循环*/
while (true) {
    for (; ;) {
        for ($m = 1; $m < 10; $m++) {
            echo $m . " ";
            if ($m == 7) {
                echo "<p>变量\$m等于7，跳出第一层循环！<p>";
                break 1;
            }
        }

        for ($n = 1; $n < 20; $n++) {
            echo $n . " ";
            if ($n == 16) {
                echo "<p>变量\$n等于16，跳出所有循环！";
                break 3;
            }
        }

    }
    echo "这是第二层循环的内容！";
}
echo "<hr>";