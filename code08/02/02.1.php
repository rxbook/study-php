<?php
/**
 * 打开和关闭目录
 */
$path = "D:\\www";
if (is_dir($path)) //检测是否是一个目录
{
    if ($dire = opendir($path)) //检测打开目录是否成功
    {
        echo $dire;  //输出目录指针
    }
} else {
    echo "路径错误！";
    exit();
}

closedir($dire);  //关闭目录
