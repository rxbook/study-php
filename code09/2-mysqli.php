<?php
$db_host = "localhost";//服务器
$db_user = "root";//用户名
$db_psw = "root";//密码
$db_name = "renxing";//数据库名
$mysqli = new mysqli($db_host, $db_user, $db_psw, $db_name);//实例化mysqli
$query = "select * from employee";
$result = $mysqli->query($query);
if ($result && $result->num_rows > 0) {        //判断结果集中行的数目是否大于0
    while ($row = $result->fetch_array()) {    //循环输出结果集中的记录
        $res[] = $row;
    }
    print_r($res);
} else {
    echo "查询失败";
}

// /*删除数据示例，其他的添加和修改类似*/
// $deleteSql="delete from employee where id=2";
// $rst=$mysqli->query($deleteSql);
// echo $rst?'删除成功！':'删除失败！';

$result->free();
$mysqli->close();
?>
