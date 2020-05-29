<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>文件上传函数</title>
</head>

<body>
【创建上传表单，允许上传500kb以下的文件】<p>
<form name="form1" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="up_file"/>
    <input type="submit" name="submit" value="上传"/>
</form>

<?php
/**
 * 文件上传函数
 */
/*判断是否有上传文件*/
if (!empty($_FILES['up_file']['name'])) //判断是否有上传文件
{
    $fileinfo = $_FILES['up_file']; //将文件信息付给变量$fileinfo
    if ($fileinfo['size'] < 500000 && $fileinfo['size'] > 0) //判断文件大小，大于0且小于500kb
    {
        move_uploaded_file($fileinfo['tmp_name'], $fileinfo['name']);
        echo '上传成功！';
    } else {
        echo '上传失败！文件大于500KB！';
    }
}

?>
