<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>文件上传</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    请选择要上传的文件：
    <label>
        <input type="file" name="upfile"/>
    </label>
    &nbsp;
    <label>
        <input type="submit" name="Submit" value="上传"/>
    </label>
</form>

<?php
/**
 * 文件上传
 */
if (!empty($_FILES)) //判断变量$_FILES是否为空
{
    foreach ($_FILES["upfile"] as $name => $value) //使用foreach循环输出上传文件信息的名称和值
        echo $name . "=" . $value . "<br>";
}

?>
