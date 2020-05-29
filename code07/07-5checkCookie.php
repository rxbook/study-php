<?php
$test = "";
if (isset($_GET['test'])) {
    $test = $_GET['test'];
}
if ($test != "test") {
    setcookie('iscookie', 'checkCookie', time() + 60);//设置Cookie
    $url = 'http://';
    $url .= $_SERVER['SERVER_NAME'];
    $url .= $_SERVER['PHP_SELF'];
    $url .= '?test=test';
    header('Location:' . $url);
} else {
    if (!empty($_COOKIE['iscookie'])) {
        echo "浏览器支持Cookie";
    } else {
        echo "浏览器禁用了Cookie";
    }
}
?>
