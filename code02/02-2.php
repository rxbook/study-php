<?php
//printf()函数[直接输出]和sprintf()函数[需要使用echo输出]<br>
$format = "%b,%c,%d,%u,%o,%x,%X";    //指定要输出显示的字符串格式
echo sprintf($format, 42, 42, -42, -42, 42, 42, 42);//使用echo才能输出显示字符串
echo "<br>";
printf($format, 42, 42, -42, -42, 42, 42, 42);    //可以直接输出显示字符串

//nl2br()函数<br>
$string = "欢迎您\n字符串函数\n这是一个实例";
echo $string . "<br>";
echo nl2br($string) . "<br>"; //将\n转换为浏览器识别的<br>换行符

//wordwrap()函数<br>
$string = "renxingrenxingrenxing";
$width = 7;
$break = "\n<br>";
//在字符串$string的每7个字符处强制换行
echo wordwrap($string, $width, $break, true);

//substr_count()函数：确定一个指定的子字符串在所提供的字符串中有多少个<br>
$haystack = "Hello world ,in my world,The world is nice";
$handle = "world";
$count = substr_count($haystack, $handle);
echo $count;//输出3

//str_word_count()函数：统计某个单词出现的数目<br>
$string = "Hello world & sunyang!";
$count = str_word_count($string);
echo '字符串中共有' . $count . '个单词' . "<br>";
print_r(str_word_count($string, 1));//显示字符串中的单词
echo "<br>";
print_r(str_word_count($string, 2));    //显示字符串中的单词和单词的开始位置
echo "<br>";
print_r(str_word_count($string, 1, "&"));//将第三个参数当成单词处理

//strstr()函数：查找子字符串，返回子字符串第一次出现后的所有内容。<br>
$haystack = "Hello world & sunyang";
$handle = "&";
$string = strstr($haystack, $handle);//调用strstr()函数
echo $string;//输出&和&之后的内容：& sunyang

//strpos()函数：查找字符串的位置，返回一个字符串在另一个字符串中第一次出现的位置。<br>
$haystack = "Hello world & sunyang";
$handle = "&";
echo strpos($haystack, $handle); //显示"&"所在的位置，输出：12

//str_repeat()函数：字符串复制<br>
$input = "qq*";
$multiplier = 6;
$repeat = str_repeat($input, $multiplier); //将字符串复制6遍
echo $repeat;

//strrev()函数：反转字符串<br>
$string = "abcde123";
echo "翻转前为：" . $string;
echo "<br>";
$reversal = strrev($string);
echo "翻转后为：" . $reversal;

//substr_replace()函数：字符串替换<br>
$string = "Hello world";
$replacement = "SUNYANG";
$start = 6;
$replace = substr_replace($string, $replacement, $start);
echo $replace;//输出 Hello SUNYANG

$string = " SUNYANG";    //定义字符串
$replacement = "Hello";
$start = 0;
$length = 0;
//插入字符串SUNYANG
$insert = substr_replace($string, $replacement, $start, $length);
echo $insert; //输出 Hello SUNYANG

//explode()函数：用指定的分隔符把字符串切分成数组<br>
$string = "ABC,DE,F,GHI";
$separator = ",";
$limit = 3;
//以,为标识将字符串切分
$array = explode($separator, $string, $limit);
print_r($array);

//str_split()函数：将一个字符串分割成等长度的多个子字符串。<br>
$string = "renxingrenxingrenxing";
$split_length = 7;
//将字符串平均的切分成长度为7的子字符串
$split = str_split($string, $split_length);
print_r($split);

//implode()函数：将数组的元素连接起来成为字符串。<br>
$pieces = array('Hello', 'sunyang', '&', 'PHP');
$glue = "!";
//把4个字符串合并为一个字符串
$string = implode($glue, $pieces);
echo $string;

//strcmp()函数可以精确的比较两个字符串的大小<br>
$string1 = "sunyang";
$string2 = "Sunyang";
$flag = strcmp($string1, $string2);
if ($flag == 0) {
    echo $string1 . " 和 " . $string2 . " 相等";
} elseif ($flag > 0) {
    echo $string1 . " 大于 " . $string2;
} elseif ($flag < 0) {
    echo $string1 . " 小于 " . $string2;
}

//strncmp()函数可以选择想要比较的字符串长度（字符个数）<br>
$string1 = "sunyang";
$string2 = "sun";
$len = 3;
$flag = strncmp($string1, $string2, $len);//比较字符串
if ($flag == 0) {//判断字符串的大小
    echo $string1 . " 和 " . $string2 . " 相等";
} elseif ($flag > 0) {
    echo $string1 . " 大于 " . $string2;
} elseif ($flag < 0) {
    echo $string1 . " 小于 " . $string2;
}