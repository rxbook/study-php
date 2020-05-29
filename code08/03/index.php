<?php
/**
 * 文件处理的高级应用
 */
/*分别使用4个函数输出文本文件*/
$name = "07.txt"; //指定文件路径及文件
if (is_file($name)) //判断文件是否存在
{
    echo "【文件原内容为】：";
    readfile("07.txt"); //读取文本文件原内容
    echo "<br>-------------------------------<br>";

    echo "文件总字节数：" . filesize($name) . "<br>";
    $open = fopen($name, 'rb'); //打开文件
    echo "初始指针位置是：" . ftell($open) . "<br>"; //输出指针位置
    fseek($open, 33); //移动指针
    echo "使用fseek()函数后 指针的位置是：" . ftell($open) . "<br>"; //输出移动后的指针位置
    echo "当前指针后面的内容为：" . fgets($open); //输出从当前指针到行尾的内容
    if (feof($open)) //判断文件是否已经指向文件末尾
    {
        echo "当前指针指向文件末尾：" . ftell($open) . "<br>"; //如果指向了文件末尾，则输出指针位置
    }
    rewind($open); //使用rewind()函数 将文件的指针设为文件流的开头
    echo "使用rewind()函数后 指针的位置为：" . ftell($open) . "<br>"; //查看使用rewind()函数后 指针的位置
    echo "输出前33个字节的内容：" . fgets($open, 33); //输出前33个字节的内容
    fclose($open); //关闭文件
} else {
    echo "文件不存在！";
}

echo "<hr>";
/* 使用flock()函数锁定文件，然后写入数据，最后解除锁定 */
$name2 = "08.txt"; //声明要打开的文件名称
$fd = fopen($name2, 'w'); //以'w'形式（只写）打开文件
flock($fd, LOCK_EX); //锁定文件，独占共享

$content = "《爱的供养》我用尽一生一世来将你供养，只期盼你停住流转的目光！千年之后的你会在哪里，身边有怎样风景？！";
fwrite($fd, $content); //向文件中写入数据
flock($fd, LOCK_UN); //释放锁定
fclose($fd); //关闭文件指针
readfile($name2); //输出文件内容
