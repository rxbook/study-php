<?php
/**
 * PHP字符串
 */

/* 单引号和双引号的区别*/
/*
双引号的内容可以被解释并替换，
而单引号的内容是“所见即所得!”
*/
$test = "PHP";
$str = "双引号的$test";
$str1 = '单引号的$test';

echo $str . "<br>";
echo $str1;
echo "<hr>";

/*字符串的连接符*/
$name1 = "欢迎光临我的博客：";
$name2 = "www.myblog.qq";
echo $name1 . $name2 . ".com";
echo "<br>";
echo "$name1$name2.com";
echo "<hr>";

/*字符串操作*/
/*去除字符串首位空格和特殊字符trim()函数、ltrim()函数、rtrim()函数*/
$st = "     歌词:钟声想起归家的信号!ok    ";
echo trim($st);
echo "<br>";

echo ltrim($st);
echo "<br>";
echo ltrim($st, "     歌词:");
echo "<p>";

echo rtrim($st);
echo "<br>";
echo rtrim($st, "!ok    ");
echo "<hr>";

/*转义、还原 字符串数据*/
/*手动操作*/
echo "My favourite color is 'blue'! ";
echo "<p>";

/*自动转义和还原字符串使用：
addslashes()函数、stripslashes()函数*/
$st = "My favourite color is 'blue'! ";
echo $st . "<br>"; //输出原字符串
$a = addslashes($st); //对字符串自动转义
echo $a . "<br>"; //输出转义后的字符串
$b = stripslashes($a); //对字符串还原
echo $b . "<br>"; //输出还原后的字符串

echo "<p>";
/*对指定范围内的字符串进行转义和还原：
addcslashes()函数、stripcslashes()函数*/
$sabc = "My favourite color is blue";
echo $sabc . "<br>";
$sa = addcslashes($sabc, "o");
echo $sa . "<br>";
$sb = stripcslashes($sa);
echo $sb . "<p>";

/*非字母和数字且ASCII码小于32和大于126的字符转换成八进制*/
$tabc = "请进官方中文网";
echo $tabc . "<br>";
$ta = addcslashes($tabc, "官方中文网");
echo $ta . "<br>";
$tb = stripcslashes($ta);
echo $tb;
echo "<hr>";

/*strlen()函数获取字符串的长度*/
$msg = "欢迎来到我的空间：user.qzone.qq.com/1234567";
echo strlen($msg);

/*截取字符串*/
/*使用substr()函数截取字符串中指定长度的字符*/
$subTest = "She is a well-read student";
echo $subTest;
echo substr($subTest, 0); //从第0个字符开始截取（截取全部）
echo substr($subTest, 4, 14);  //从第4个开始，连续截取14个
echo substr($subTest, -4, 4); //从倒数第四个截取，截取四个（倒着截取四个）
echo substr($subTest, 0, -4);  //从第一个字符开始截取，截取到倒数第四个

/*实际应用：对标题超出30个字的部分采用....表示*/
$titile = "苍茫的天涯是我的爱绵绵的青山脚下花正开什么样的节奏是最呀最摇摆我们都在唱着最炫民族风";
if (strlen($titile) > 30) {
    echo substr($titile, 0, 30) . "....";
} else {
    echo $titile;
}
echo "<hr>";

/*比较字符串――三种方式*/
/*方式一：使用strcmp()函数和strcasecmp()函数按照字节比较。
比较结果显示：前和后相同为0，前>后为大于0，前<后为小于0.
区别：strcmp()区分大小写，而后者不区分大小写
应用：s使用strcmp()区分大小写可以判断输入的用户名和密码是否正确
*/
$srr1 = "I have a Dream";
$srr2 = "You Must Go To School";
$srr3 = "you must go to school";
echo strcmp($srr1, $srr2);     //-1
echo "<br>";
echo strcmp($srr2, $srr1);     //1
echo "<br>";
echo strcmp($srr2, $srr3);     //-1
echo "<br>";
echo strcasecmp($srr2, $srr3); //0
echo "<hr>";

/*字符串比较方式二：strnatcmp()自然比较，比较字符串中的数字部分
注意：这样比较10<2
比较结果显示：前和后相同为0，前>后为大于0，前<后为小于0.
*/
$srt1 = "pic2.jpg";
$srt2 = "pic10.jpg";
$srt3 = "microsoft1";
$srt4 = "MICROSOFT2";

echo strcmp($srt1, $srt2);     //按照上面的字节比较，结果为1
echo "<br>";
echo strcmp($srt3, $srt4);     //按照上面的字节比较，结果为1
echo "<br>";
echo strnatcmp($srt1, $srt2);     //按自然排序比较，结果为-1
echo "<br>";
echo strnatcmp($srt3, $srt4);     //按自然排序比较，结果为1
echo "<hr>";

/* strncmp()函数比较字符串中前n个字符，区分大小写*/
$rx1 = "I love you";
$rx2 = "i love you";
echo strncmp($rx1, $rx2, 2);
echo "<hr>";

/*5.4.6 检索字符串*/
/*（1）使用strstr()函数查找指定的关键字*/
echo strstr("编程手册", "编");
echo "<br>";
echo strstr("www.mabcd.com", "m");
echo "<br>";
echo strstr("010-81234567", "8");
echo "<br>";
echo strstr("你在干什么", "在");
echo "<br>";

/* （2）使用substr_count()函数 检索字串出现的次数*/
$geci = "这是一段文本一段字符串！";
echo substr_count($geci, "一");
echo "<hr>";

/* 5.4.7 替换字符串――str_ireplace()函数和substr_replace()函数*/
$staa2 = "广告";
$staa1 = "**";
$staa = "屏蔽这段文本中的广告和其他不合法信息，包括文字广告，图片广告";
echo str_ireplace($staa2, $staa1, $staa);
echo "<p>";

$stbb2 = "Football";
$stbb1 = "**";
$stbb = "My favourite sport is Football,but sometimes I maybe play basketball more than football.";
echo "【str_ireplace()函数不区分大小写】" . str_ireplace($stbb2, $stbb1, $stbb);
echo "<br>";
echo "【str_replace()函数区分大小写】" . str_replace($stbb2, $stbb1, $stbb);
echo "<p>";

/*查询关键词描红功能*/
$miaohong = "西安交通大学是西安最著名的大学，拥有古城西安悠久的历史风韵，是西安人最引以为豪的大学！";
$miao = "西安";
echo str_ireplace($miao, "<strong><font color='red'>" . $miao . "</font></strong>", $miaohong);
echo "<p>";


/*格式化字符串：number_format()函数格式化数字*/
$shuzi = 1992.648;
$shuzi2 = 19923269581.64832195;
echo number_format($shuzi) . "<br>";;
echo number_format($shuzi, 2) . "<br>";
echo number_format($shuzi2, 4, ".", ",");
echo "<hr>";

/*分割字符串 ――explode()函数*/
$fenge = "西安*榆林*延安*宝鸡*咸阳*渭南";
$f = explode("*", $fenge);
print_r($f);
echo "<p>";

echo $f[0] . "<br>";
echo $f[1] . "<br>";
echo $f[2] . "<br>";
echo $f[3] . "<br>";
echo $f[4] . "<br>";
echo $f[5] . "<br>";
echo "<hr>";

/*拼接字符串――implode()函数*/
$str = implode("@", $f);
echo $str;