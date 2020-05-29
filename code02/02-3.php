<?php
/**
 * 字符串加密
 * 备注：部分函数已不再支持新版PHP
 */
/*使用crypt()函数 进行加密*/
$str = "This is an Example!";
echo '加密前$str的值为：' . $str . '<br>';
$xstr = crypt($str);
echo '加密后$str的值为：' . $xstr;

/*对输入的用户名进行检测*/
$input = 'zhangsan';
$user = crypt(trim($input), "tm"); //对用户名加密
echo $user;
echo '<hr>';

echo " 使用md5()函数加密字符串admin：";
echo md5('admin');

echo "<br>使用sha1()函数加密字符串admin：";
echo sha1('admin');
echo '<hr>';

/* Mcrypt常量 */
$en_dir = mcrypt_list_algorithms(); //该函数返回Mcrypt支持的加密算法数组
echo "Mcrypt支持的算法有：";
foreach ($en_dir as $en_value) {
    echo $en_value . "  ";
}

$mo_dir = mcrypt_list_modes(); //反悔Mcrypt支持的算法模式数组
echo "<p>Mcrypt支持的加密模式有：";
foreach ($mo_dir as $mo_value) {
    echo $mo_value . "  ";
}
echo '<hr>';

/* Mcrypt()工作流程*/
$str = "我想我会一直爱你"; //被加密文本
$key = "key:111"; //密钥
$cipher = MCRYPT_DES; //密码类型
$modes = MCRYPT_MODE_ECB; //密码模式
$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher, $modes), MCRYPT_RAND); //初始化向量
echo "【加密前的内容】：" . $str . "<p>";
$str2 = mcrypt_encrypt($cipher, $key, $str, $modes, $iv); //加密函数
echo "【加密后的内容】：" . $str2 . "<p>";
$str3 = mcrypt_decrypt($cipher, $key, $str2, $modes, $iv); //解密函数
echo "【解密后的内容】：" . $str3;
echo '<hr>';

/*Mhash库常量*/
$num = mhash_count(); //该函数返回最大的hash id
echo "mhash 库支持的算法如下：";
for ($i = 0; $i <= $num; $i++) {
    echo $i . "=>" . mhash_get_hash_name($i) . "  "; //输出每一个hash id 的名称
}
echo '<hr>';

/*使用mhash()函数 和 mhash_keygen_s2k()生成一个校验码，并使用bin2hex()函数将二进制转换成十六进制*/
$filename = 'news.txt'; //文件路径及文件
$str = file_get_contents($filename); //读取文件内容到$str变量中
$hash = 2; //设置hash值
$password = "111";
$salt = "1234";
$key = mhash_keygen_s2k(1, $password, $salt, 10); //生成key值
$str2 = bin2hex(mhash($hash, $str, $key)); //使用$key值、$hash值对字串$str加密
echo "文件news.txt的校验码是：" . $str2;

