<?php

/**
 * POSIX扩展正则表达式 ---- 已废弃
 */
/*ereg()函数 和eregi()函数*/
/*实例：使用ereg()函数验证变量是否合法*/
//$str_ereg = '^[$][[:alpha:]_][[:alnum:]]*';
//ereg($str_ereg, '$renxing', $reg);
//var_dump($reg);
//echo "<hr>";

/*ereg_replace()函数和eregi_replace()函数*/
/*实例：将下面所有的tm转换成大写的TM */
//$tm = "tm";   //要匹配的字符
//$word = "Hello,tm,tM,TM,Tm,";  //要查找的文本
//$result = eregi_replace($tm, 'TM', $word);  //使用eregi_replace函数忽略大小写替换
//echo $result;  //输出替换后的结果
//echo "<hr>";

/*split()函数和spliti()函数分割字符串*/
//$fenge = "is"; //分割字符串使用的表达式
//$str = "This is a register book"; //要被分割的字符串
//$arr_str = spliti($fenge, $str); //使用spliti()函数分割字符串 不区分大小写
//var_dump($arr_str);
//echo "<hr>";


/**
 * PCRE正则表达式函数
 */
/* preg_grep()函数*/
/*例：在数组中匹配具有正确格式的电话号码，并保存到另一个数组中*/
$telno = '/\d{3,4}-?\d{7,8}/';   //国内电话号码格式
$arr = array('02983145678', '186523123', '01086523652');
$preg_arr = preg_grep($telno, $arr);
var_dump($preg_arr);
echo "<hr>";

/* preg_match()函数 和 preg_match_all()函数 */
$str = 'This is an example!';
$match = '/\b\w{2}\b/';
$num1 = preg_match($match, $str, $str1);
echo $num1;
echo "<br>";
var_dump($str1);
echo "<p>";
$num2 = preg_match_all($match, $str, $str2);
echo $num2;
echo "<br>";
var_dump($str2);
echo "<hr>";

/* preg_quote()函数：将字符串中所有特殊字符进行自动转义 */
$fu = '!、$、^、*、+、.、[、]、\\、/、b、<、>';
$fu2 = 'b';
$match_one = preg_quote($fu, $fu2);
echo $match_one;
echo "<hr>";

/*preg_replace()函数*/
$string = '[b]这是粗体字[/b]';
$b_st = preg_replace('/\[b\](.*)\[\/b]/i', '<b>$1</b>', $string);
echo $b_st;