<?php
/**
 * 读写文件
 */

/*readfile()函数、file()函数、file_get_contents()函数 分别读取文本文件内容*/
echo "【使用readfile()函数读取文件】：<br>";
readfile("01.txt");
echo "<br>--------------------------------<br>";

echo "【使用file()函数读取文件】：<br>";
$f = file("01.txt");
foreach ($f as $c) {
    echo $c . "<br>";
}
echo "<br>--------------------------------<br>";

echo "【使用file_get_contents()函数读取文件】：<br>";
$f2 = file_get_contents("01.txt");
echo $f2;

echo "<hr>";


/* 使用fgets()函数和fgetss()函数分别读取php文件并显示出来 */
echo "【使用fgets()函数读取02.php文件并显示出来】：<br>";
$open = fopen('02.php', 'rb');
while (!feof($open))  //feof()函数 测试指针是否到了文件结束的位置
{
    echo fgets($open); //输出当前行
}
fclose($open);

echo "<br>--------------------------------<br>";
echo "【使用fgetss()函数读取02.php文件并显示出来】：<br>";
$open = fopen('02.php', 'rb');  //创建文件资源
while (!feof($open))  //feof()函数 测试指针是否到了文件结束的位置
{
    echo fgetss($open); //输出当前行
}
fclose($open);

echo "<hr>";

echo "<pre>";
/*使用fgetc()函数逐个字符读取03.txt文件并输出*/
echo "【使用fgetc()函数逐个字符读取03.txt文件并输出】：<br>";
$open2 = fopen('03.txt', 'rb');  //创建文件资源
while (false != ($chr = fgetc($open2))) //使用fgetc()函数 取得一个字符，判断是否为false
{
    echo $chr; //如果不为false，则输出该字符
}
fclose($open2);
echo "</pre>";


echo "<hr>";
/* 使用fread()函数 读取04.txt 内容 */
echo "【使用fread()函数 读取04.txt 内容】：<br>";
$open3 = fopen('04.txt', 'rb');
echo fread($open3, 40); //使用fread()函数 读取文件内容的前40个字节
echo "<p>";
echo "【剩余部分的内容为】：";
echo fread($open3, filesize('04.txt'));

echo "<hr><hr>";
/*分别使用fwrite()函数 和 file_put_contents()函数 写入数据*/
$filepath = "05.txt";
$str = "此情可待成追忆，只是当时已惘然。<br>";
echo "【用fwrite()函数写入文件】：";
$op = fopen($filepath, 'wb') or die('文件不存在！');
fwrite($op, $str);
fclose($op);
readfile($filepath);

echo "<p>【用file_put_contents()函数写入文件】：";
file_put_contents($filepath, $str);
readfile($filepath);
