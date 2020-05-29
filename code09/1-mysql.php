<?php
$db_host = "localhost";//服务器
$db_user = "root";//用户名
$db_psw = "root";//密码
$db_name = "renxing";//数据库名
$connection = mysql_connect($db_host, $db_user, $db_psw) or die("连接服务器失败");
mysql_select_db($db_name, $connection) or die("选择数据库失败");
$result = mysql_query("select * from employee") or die("查询失败");//执行查询
//判断结果集中行的数目是否大于零
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        $res[] = $row;
    }
    print_r($res);
} else {
    echo "未查询到任何记录";
}

// /*添加数据*/
// $insertSql = mysql_query("insert into employee (name,address,age) values ('renxing','xian',23)");
// echo $insertSql?'添加成功！':'添加失败！';
// /*修改数据*/
// $updateSql = mysql_query("update employee set name='Lucy' where id = 1");
// echo $updateSql?'修改成功！':'修改失败！';
// /*删除数据*/
// $deleteSql = mysql_query("delete from employee where id = 1");
// echo $deleteSql?'删除成功！':'删除失败！';


mysql_free_result($result);// 释放结果集内存
mysql_close($connection);


?>
