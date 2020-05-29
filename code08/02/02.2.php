<?php
/**
 * 浏览目录
 */
/* 使用scandir()函数 查看指定目录下的所有文件 */
//$path='C:\\Documents and Settings'; //指定的目录
if (is_dir($path))  //判断是否为目录
{
    $mu = scandir($path); //使用scandir()函数获取所有目录和文件
    foreach ($mu as $value) //使用foreach循环遍历
    {
        echo $value . "<br>";
    }
} else {
    echo "目标路径错误！";
}
