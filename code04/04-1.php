<?php
/*创建数组的第一种方法*/
//$arr    这个是该数组的名称.
//[0]    这个我们称为下标，或者称为 关键字
//$arr[0]    这个称为数组的一个元素.
//$arr[0]=123     123 表示该$arr[0]元素对应的值
//在php数组中，元素存放的值可以是任意数据数据类型 ,
$arr[0] = 123;
$arr[1] = 45.6;
$arr[2] = "我是一个好同学";
$arr[3] = null;
$arr[4] = true;
echo "数组的总数是：" . count($arr) . "<br>";

//遍历数组
for ($i = 0; $i < count($arr); $i++) {
    echo "第" . $i . "个元素=" . $arr[$i] . "<br>";
}
echo "<br>------------------------------------------<br>";

/*创建数组的第二种方法*/
$aaa = array(100, 89.6, "任兴", true);
echo "数组的总数是：" . count($aaa) . "<br>";

//遍历数组
for ($i = 0; $i < count($aaa); $i++) {
    echo "第" . $i . "个元素=" . $aaa[$i] . "<br>";
}
echo "<br>------------------------------------------<br>";

/*创建数组的第三种方法*/
//指定下标后，就只能使用foreach循环遍历：
$bbb['name'] = "任兴";
$bbb['age'] = 23;
$bbb['sex'] = "男";

//使用foreach遍历数组
foreach ($bbb as $key => $val) {
    echo $key . '：' . $val . "<br>";
}
echo "<br>------------------------------------------<br>";

$a = array(2, 3);
$a[3] = 56;   //这里说明php的数组是可以动态增长.
echo $a[3];
echo "<br>------------------------------------------<br>";

//explode 对字符串进行分割，并且生成数组（在实际开发中比较常用） 
$str = "北京&上海&天津&郑州&成都";
$arr = explode("&", $str);
print_r($arr);
echo "<br>------------------------------------------<br>";

//使用unset函数可以销毁某个元素，也可以销毁某个变量，销毁后key不会重新组合。
$c = array('老大', '老二', '老三', '老四');
print_r($c);
unset($c[1]); //删除第二个元素
echo '<br>';
print_r($c);
echo "<br>------------------------------------------<br>";

//数组运算符示例：$a+$b,会把$b数组的元素附加到$a数组中，
//但是不会覆盖相同key的（会跳过）
$fruit1 = array('a' => 'apple', 'b' => 'banana');
$fruit2 = array('a' => 'pear', 'b' => 'orange', 'c' => 'flower');
print_r($fruit1 + $fruit2);
echo "<br>------------------------------------------<br>";

//【冒泡排序】
$pao = array(2, -1, 16, 3, 7, 1);
$temp = 0; //这是一个中间变量
for ($i = 0; $i < count($pao) - 1; $i++) {
    for ($j = 0; $j < count($pao) - 1 - $i; $j++) {
        //如果前面的数大于后面的数,就交换位置
        if ($pao[$j] > $pao[$j + 1]) {
            $temp = $pao[$j];
            $pao[$j] = $pao[$j + 1];
            $pao[$j + 1] = $temp;
        }
    }
}
print_r($pao);
echo '<br>';

//使用函数直接调用
require 'Sort.php';
$pao2 = array(2, -1, 16, 3, 7, 1);
bubbleSort($pao2);
print_r($pao2);
echo "<br>------------------------------------------<br>";

//选择排序法
$xuanze = array(2, -1, 16, 3, 7, 1);
selectSort($xuanze);
print_r($xuanze);
echo "<br>------------------------------------------<br>";

//插入排序法
$charu = array(2, -1, 16, 3, 7, 1);
selectSort($charu);
print_r($charu);
echo "<br>------------------------------------------<br>";

//【数组查找】
require 'Find.php';
//普通查找
$find_arr = array('北京', '天津', '呼和浩特', '北京', '中关村', '上海');
search($find_arr, '北京');

echo '<br>';
//二分查找法
$binary_arr = array(10, 20, 35, 44, 60, 71, 88, 89);
search($binary_arr, 35, 0, count($binary_arr));
