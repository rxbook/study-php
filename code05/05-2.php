<h1>正则表达式</h1>
(5.2) preg_grep()函数：返回一个数组<br>
<?php
//使用正则表达式"/^\D{1,}$/"在数组中查找不包含任何数字字符的所有数组元素
$array = array("Aa", "3C", "@", "78", "5*", "php");    //定义数组
$pattern = "/^\D{1,}$/";
$result = preg_grep($pattern, $array);    //查找不包含数字字符的数组元素
print_r($result);                        //显示结果集result
?>
<hr>
(5.3)preg_match()函数：用于在字符串中查找匹配项，返回一个数组。<br>
<?php
//使用preg_match()函数验证电子邮箱地址是否正确
$email = "test@163.com";
$pattern = "/^([a-zA-Z0-9_-])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+([.a-zA-Z0-9_-]+[a-zA-Z0-9_-])+[a-zA-Z0-9_-]$/";
if (preg_match($pattern, $email)) {
    echo "邮箱 " . $email . " 是正确的";
} else {
    echo "邮箱 " . $email . " 是不正确的";
}
?>
<hr>
(5.4)preg_split()函数：使用正则表达式分割字符串，并将结果以数组的形式返回。<br>
<?php
$string = "***任兴******北京**PHP****";
$pattern = "/\*{1,}/";
$split = preg_split($pattern, $string);//去掉字符串中的*号
foreach ($split as $value) {
    echo $value . " ";
}
?>
<hr>
(5.5)preg_replace()函数：查找和替换子字符串<br>
<?php
$subject = "欢迎来到aa";
$replacement = "PHP的世界";
$pattern = "/a{2}/";
$replace = preg_replace($pattern, $replacement, $subject);
echo $replace; //输出：欢迎来到长春三扬科技
?>
<hr>
(5.6)preg_quote()函数对特殊字符进行转义<br>
<?php
$String1 = "你好^-^,PHP啊*|";
$delimiter = "-";
$quote1 = preg_quote($String1, $delimiter);
echo $quote1;
echo "<br>";
$String2 = "我有$5000";
$quote2 = preg_quote($String2);
echo $quote2;
?>
<hr>

<h1>常用demo</h1>
1.PHP正则匹配一对中括号内的内容为空：<br>
<?php
$ss = "sdfghjfsd[url]88888888888888[/url]后面的内容";
$ss = preg_replace('/\[url\S*\[\/url\]/', '', $ss);
echo $ss; //输出：sdfghjfsd后面的内容
?>
<hr>
2.PHP正则匹配网页源代码中的图片路径，如果源代码中有空格，先去掉“\r”和"\n"，然后再匹配。<br>
<?php
$content = "这里是内容<img src='http://www.baidu.com/img/bdlogo.gif' alt='baidu' title='百度'>图片的超链接";
$str = str_replace("\r", "", $content);
$str = str_replace("\n", "", $str);
$pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";
preg_match_all($pattern, $str, $match);
print_r($match);

?>
<hr>
3.PHP正则获取某个页面的所有超链接： <br>
<?php
$str = file_get_contents("http://www.baidu.com/index.php");
$pat = '/<a(.*?)href="(.*?)"(.*?)>(.*?)<\/a>/i';
preg_match_all($pat, $str, $m);
print_r($m);
?>