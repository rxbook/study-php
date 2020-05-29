<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>多文件同时上传</title>
    <style type="text/css">

        td.a {
            width: 100px;
        }

        td.b {
            width: 400px;
        }
    </style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="500" height="175" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td class="a">选择文件：</td>
            <td class="b"><input type="file" name="upfile[]"/></td>
        </tr>

        <tr>
            <td class="a">选择文件：</td>
            <td class="b"><input type="file" name="upfile[]"/></td>
        </tr>

        <tr>
            <td class="a">选择文件：</td>
            <td class="b"><input type="file" name="upfile[]"/></td>
        </tr>

        <tr>
            <td class="a">选择文件：</td>
            <td class="b"><input type="file" name="upfile[]"/></td>
        </tr>

        <tr>
            <td class="a">&nbsp;</td>
            <td class="b"><input type="submit" name="submit" value="批量上传"/></td>
        </tr>
    </table>
</form>

<?php
if (!empty($_FILES['upfile']['name'])) {
    $filename = $_FILES['upfile']['name'];//将上传文件名另存为数组
    $filetmpname = $_FILES['upfile']['tmp_name']; //将上传的临时文件名另存为数组
    for ($i = 0; $i < count($filename); $i++) //循环上传文件
    {
        if ($filename[$i] != "") //判断上传文件名是否为空
        {
            move_uploaded_file($filetmpname[$i], $filename[$i]);
            echo '文件' . $filename[$i] . '上传成功！<br>';
        }
    }
}

?>
