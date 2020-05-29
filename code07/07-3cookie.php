<?php
/*删除Cookie*/
if (isset($_GET['act']) && $_GET['act'] == 'logout') {
    setcookie("message", "", time() + 3600);             //将Cookie的值设置为空
    echo $_COOKIE['message'];                         //刷新页面，若没有输出信息，说明删除成功
    echo "<script>alert('Cookie已成功删除');location.href='?';</script>";

}

/*创建Cookie*/
if (!isset($_COOKIE['message'])) {                     //判断Cookie是否存在
    setcookie("message", "Cookie保存成功", time() + 3600);//创建Cookie，设置过期时间为一个小时
    echo "请刷新页面，将Cookie保存";
} else {
    echo $_COOKIE['message'];                         //输出Cookie中的信息
    echo "<a href='?act=logout'>删除Cookie</a>";
}

?>
