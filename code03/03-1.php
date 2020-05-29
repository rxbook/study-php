<?php
/**
 * PHP数组
 */

/*array()定义数组*/
$arrTest = array("北京", "上海", "广州", "深圳", "天津");
print_r($arrTest);
echo "<br>";
echo $arrTest[0] . "<br>";
echo $arrTest[1] . "<br>";
echo $arrTest[2] . "<br>";
echo $arrTest[3] . "<br>";
echo $arrTest[4] . "<br>";
echo "<hr>";

/*直接为数组元素赋值――在创建数组时不知道所创建数组的大小，或在实际编写程序时数组大小有可能改变时采用*/
$array[1] = "陕西省";
$array[2] = "河北省";
$array[3] = "湖南省";
$array[4] = "广东省";
print_r($array);
echo "<hr>";

/*PHP中数组的类型为两种：索引数组和关联数组*/
$lovearray = array("renxing" => "手机", "aidi" => "电脑", "kuaile" => "笔记本");
echo $lovearray["kuaile"];
echo "<br>";
$lovearray["kuaile"] = "一辈子的约定！";
echo $lovearray["kuaile"];
echo "<hr>";

/*再次练习用print_r()函数对数组的输出*/
//$arr=array(1=>"苹果",2=>"香蕉",3=>"荔枝",4=>"桔子",5=>"菠萝");
$arr = array("刘亦菲", "成龙", "李连杰", "李冰冰", "赵本山", "小沈阳", "王艳", "林依晨");
print_r($arr);
echo "<hr>";

/* 数组的构造*/
/*如果一个数组的元素不是变量，而是一维数组的时候，那么这个数组就是二维数组*/
$str = array(
    "书籍" => array("小说", "杂志", "论文", "医学"),
    "体育用品" => array("m" => "足球", "n" => "篮球", "p" => "乒乓球"),
    "电子产品" => array("手机", 5 => "电脑", 8 => "电视机", "冰箱", "洗衣机")
);
print_r($str);
echo "<hr>";

/*遍历数组*/
//foreach循环遍历：并非操作数组本身，而是操作数组的一个备份
$url = array(
    '百度' => 'www.baidu.com',
    '新浪' => 'www.sina.com',
    '腾讯' => 'www.qq.com',
    '优酷' => 'www.youku.com'
);
foreach ($url as $link) {
    echo $link . '<br>';
}
//使用list()函数遍历数组，和each()函数
while (list($name, $value) = each($url)) {
    echo "$name=$value<br>";
}
echo "<hr>";

/* 字符串育数组的转换 */
//使用explode()函数将字符串转换成数组
$str1 = "中国、英国、德国、法国、意大利、俄国";
$str2 = explode("、", $str1);
print_r($str2);
echo "<br>";

//使用implode()函数将数组转换成字符串
$str3 = array('任兴', '男', '汉族', '1990', '陕西西安', '13363696325');
echo implode("& ", $str3);
echo "<hr>";

/* 统计数组元素个数 */
//统计一维数组元素的个数
$arr1 = array("学生", "工人", "医生", "教师", "农民", "无业游民", "军人", "演员");
echo count($arr1);
echo "<br>";

//统计二维数组元素的个数
$arr2 = array(
    "南方城市" => array("广州", "上海", "深圳"),
    "北方城市" => array("北京")
);
echo count($arr2, COUNT_RECURSIVE);
echo "<hr>";

/* 获取数组中最后一个元素 */
$ay = array("美国", "英国", "法国", "中国", "德国");
$aa = array_pop($ay);
echo $aa . "<br>";
print_r($ay); //输出数组$ay，数组的长度将减1
echo "<hr>";

/* 向数组中添加元素 */
$ay = array("美国", "英国", "法国", "中国", "德国");
array_push($ay, "Japan", "俄国", "意大利", "蒙古");
print_r($ay);
echo "<hr>";

/* 删除数组中重复的元素 */
$ay2 = array("林俊杰", "周杰伦", "成龙", "刘亦菲", "林俊杰", "成龙", "刘德华");
print_r($ay2); //输出原来的数组
echo "<br>";
$ab = array_unique($ay2);
print_r($ab); //删除重复元素后的数组
echo "<hr>";
