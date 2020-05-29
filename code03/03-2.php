<?php
//array_merge()函数的测试
$balls1 = array("B" => "篮球", "D" => "羽毛球");
$balls2 = array("A" => "足球", "B" => "排球", "C" => "乒乓球");
$merge = array_merge($balls1, $balls2);//合并数组a1和数组a2
print_r($merge);
echo '';

$balls = array(5 => "足球", 1 => "排球", 3 => "乒乓球");
$merge = array_merge($balls);    //合并数组a1和数组a2
print_r($merge);

// array_chunk()函数
$balls = array("排球", "乒乓球", "篮球");
$chunk = array_chunk($balls, 2, true);
print_r($chunk);

//range() 函数
$numbers = range(0, 2);
print_r($numbers);
echo '';
$step = range(0, 12, 5);
print_r($step);
echo '';
$letters = range("A", "E");
print_r($letters);

// array_reverse() 函数：
$letters = array('a', 'b', 'c', 'd', 'e');
echo "翻转前为：";
foreach ($letters as $value) {
    echo " $value  ";
}
$reverse = array_reverse($letters);
echo "";
echo "翻转后为：";
foreach ($reverse as $value) {
    echo " $value  ";
}

//array_sum() 函数――求数组元素之和 
$array = array("50", "24", "hello", "21", "sunyang", "5");
//字符串"hello"被忽略，不参与求和运算
$sum = array_sum($array);
echo "求和运算的结果为：" . $sum;    //计算结果为：100

//array_flip() 函数――对调数组的键名和值
$balls = array(
    "排球" => "vollyball",
    "乒乓球" => "pingpong",
    "足球" => "pingpong",
    "篮球" => "basketball"
);
$flip = array_flip($balls);
print_r($flip);

//顺序查找数组元素
function seq_sch($array, $n, $k)
{
    $array[$n] = $k;
    for ($i = 0; $i < $n; $i++) {
        if ($array[$i] == $k) {
            return true;
            break;//找到目标值后跳出循环体
        }
    }
    if ($i < $n) {
        return $i;//判断是否到数组的末尾
    } else {
        return false;//查找目标值失败
    }
}

$array = array(3, 6, 1, 9, 2, 10);
$n = count($array);
$k = 9;
if (seq_sch($array, $n, $k)) {
    echo "顺序查找成功";
} else {
    echo "顺序查找失败";
}

//二分查找数组元素
function bin_sch($array, $low, $high, $k)
{
    if ($low <= $high) {
        $mid = intval(($low + $high) / 2);
        if ($array[$mid] == $k) {
            return true;
        } elseif ($k < $array[$mid]) {
            return bin_sch($array, $low, $mid - 1, $k);
        } else {
            return bin_sch($array, $mid + 1, $high, $k);
        }
    }
    return false;
}

$array = array(3, 6, 1, 9, 2, 10);
$low = min(3, 6, 1, 9, 2, 10);
$high = max(3, 6, 1, 9, 2, 10);
$k = 9;
if (bin_sch($array, $low, $high, $k)) {
    echo "二分查找成功";
} else {
    echo "二分查找失败";
}
