<?php
exit('运行本案例之前先把测试文件创建好');
?>

【1.使用basename()函数查看文件名称，返回文件路径中去掉路径后的文件名称】<br>
<?php
$path = "/root/renxing/2013.txt";
echo basename($path) . '<br>'; //输出：“2013.txt”
echo basename($path, ".txt"); //输出：“2013”
?>
<hr>
【2.使用dirname()函数查看目录名称，返回路径中去掉文件名称后的目录部分】<br>
<?php
$path = "/root/renxing/2013.txt";
echo dirname($path); //输出：“/root/renxing”
?>
<hr>
【3.使用realpath()函数查看文件的真实目录，返回文件的绝对路径】<br>
<?php
$path = "../../../2013.txt";
echo realpath($path); //输出：“D:\2013.txt”
?>
<hr>
【4.filetype()函数显示文件类型，成功则返回类型，失败返回false】<br>
<?php
echo filetype("D:/2013.txt") . '<br>'; //输出：“file”
echo filetype("D:/"); //输出：“dir”
?>
<hr>
【5.filesize()函数计算文件大小，成功则返回字节数(byte)，失败返回false。】<br>
<?php
echo filesize("D:/2013.txt") . '<br>'; //输出：“33327”(33KB)
?>
<hr>
【6.fileatime()函数查看文件上次被访问的时间，返回时间戳。
filemtime()函数查看文件上次被修改的时间，返回时间戳。】<br>
<?php
$file = "D:/2013.txt";
if (file_exists($file)) {
    echo "$file 上次被访问的时间为：" . date("Y-m-d H:i:s", fileatime($file)) . '<br>';
    echo "$file 上次被修改的时间为：" . date("Y-m-d H:i:s", filemtime($file));
}
?>
<hr>
【7.disk_total_space()函数返回一个目录所在的磁盘分区大小（字节数）。】<br>
<?php
echo disk_total_space("D:/www"); //返回的是D盘的大小字节数
?>
<hr>
【8.fileperms()函数获取文件的权限：】<br>
<?php
$file = "D:/2013.txt";
echo fileperms($file) . '<br>'; //输出：33206
echo substr(sprintf('%o', fileperms($file)), -4);//输出0666，不明白
?>

<hr>
【10.opendir()函数打开目录：】<br>
<?php
if (opendir("D:/www")) echo 'ok'; else echo 'fail';
?>
<hr>
【12.readdir()函数读取文件目录，成功则返回该目录下所有文件名称】<br>
<?php
$dir = opendir("D:/www"); //打开目录
while (($file = readdir($dir)) !== false) {//循环遍历目录下的文件
    echo $file . '<br>';//获取文件名称和大小
}
closedir($dir); //关闭目录
?>

<hr>
【16.使用fwrite()、fputs()函数写入文件，这两个函数相同】<br>
<?php
$filename = "D://2013.txt";
$str = "我是字符串";
$handle = fopen($filename, 'a'); //打开文件
$boo = fwrite($handle, $str);      //写入文件
if ($boo) {
    echo '写入成功！';
    fclose($handle);          //关闭文件
} else {
    echo '写入失败！';
    exit;
}
?>
<hr>
【16.使用file_put_contents()函数写入文件】<br>
<?php
$filename = "D://2013.txt";
$str = "我是字符串";
$boo = file_put_contents($filename, $str);//写入文件（替换原有文件）
//$boo=file_put_contents($filename,$str,FILE_APPEND);//写入文件（追加）
if ($boo) echo '写入成功！'; else echo '写入失败！';
?>
<hr>
【17.使用fread()函数可以安全地读取二进制文件】<br>
<?php
$file = fopen("D:/2013.txt", "rb"); //打开文件
$size = filesize("D:/2013.txt");  //文件大小
$string = fread($file, $size);     //读取整个文件
print_r($string);                //输出文件
?>
<hr>
【使用fgets()函数可以读取文档中的一行】<br>
<?php
$handle = @fopen("D:/2014.txt", "r"); //打开文件
if ($handle) {
    while (!feof($handle)) { //检测是否已到达文件末尾
        $context = fgets($handle); //逐行读取文件
        echo $context . '<br>';
    }
    fclose($handle);    //关闭文件
}
?>

<hr>
【20.项目实践――自定义错误日志】<br>
<?php
function myLogFile($filename, $msg)
{
    //打开自定义日志文件，如果不存在就创建新自定义日志文件
    $file = fopen($filename, "a");
    //增加错误产生的日期信息
    $str = "<" . date("Y/m/d h:i:s", mktime()) . ">" . $msg;
    //写入自定义日志文件中
    fwrite($file, $str . "<br>");
    //关闭自定义日志
    fclose($file);
}

$number = "new Error";
//如果出现非数字性错误，则写入自定义日志
if (!is_numeric($number)) {
    myLogFile("myLog.log", "出现非数字错误");
}
$conn = @mysql_connect("localhost", "root", "1234");
//如果出现MySQL数据库链接错误，则写入自定义日志
if (!$conn) {
    myLogFile("myLog.log", "出现MySQL数据库链接错误");
}

echo file_get_contents("myLog.log"); //将错误日志内容显示到页面
?>
