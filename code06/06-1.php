<?php
/**
 * 日期和时间
 *
 * 备注：作者当时学习这些技术的时候是2012年，
 * 到现在(2020)年重新整理的时候，
 * 很多函数和方法在新版的PHP(5.6以上)已经不再支持，
 * 因此部分代码仅供参考，可能运行不起来
 * @date 2020年05月29日
 */
//设置时区为中国北京时间
date_default_timezone_set("PRC");

/*获得本地化时间*/
echo "本地时间戳：" . mktime() . "<br>";
echo "当前日期为：" . date("Y-m-d", mktime()) . "<br>";
echo "当前时间为：" . date("H:i:s", mktime());
echo "<hr>";

/* 获得当前时间戳*/
$nextweek = time() + (7 * 24 * 60 * 60);
echo "现在：" . date("Y-m-d") . "<br>";
echo "下一周的今天：" . date("Y-m-d", $nextweek);
echo "<hr>";

/*获取当前日期和函数（不同格式的）*/
echo "DATE_ATOM格式的日期：" . date(DATE_ATOM) . "<br>";
echo "DATE_COOKIE格式的日期：" . date(DATE_COOKIE) . "<br>";
echo "DATE_ISO8601格式的日期：" . date(DATE_ISO8601) . "<br>";
echo "DATE_RFC822格式的日期：" . date(DATE_RFC822) . "<br>";
echo "DATE_RFC850格式的日期：" . date(DATE_RFC850) . "<br>";
echo "DATE_RSS格式的日期：" . date(DATE_RSS) . "<br>";
echo "DATE_W3C格式的日期：" . date(DATE_W3C);
echo "<hr>";

/* 获取日期信息*/
$sj = getdate();
echo $sj['year'] . "年" . $sj['mon'] . "月" . $sj['mday'] . "日 ";
echo $sj['hours'] . ":" . $sj['minutes'] . ":" . $sj['seconds'] . " " . $sj['weekday'] . "<br>";
echo "今天是这一年中的第" . $sj['yday'] . "天";
echo "<hr>";

/*检验日期的有效性*/
$year = 2013;
$month = 2;
$day1 = 28;
$day2 = 29;
var_dump(checkdate($month, $day1, $year));
echo "<br>";
var_dump(checkdate($month, $day2, $year));
echo "<hr>";

/*输出格式化的日期和时间*/
echo "输出单个变量：" . date("Y") . "-" . date("m") . "-" . date("d") . "<br>";
echo "输出组合变量：" . date("Y-m-d") . "<br>";
echo "输出更详细的时间：" . date("Y-m-d H:i:s") . "<br>";
echo "输出时间、星期及所在时区：" . date("l Y-m-d H:i:s T");
echo "<hr>";

/*显示本地化的日期和时间*/
/*实例：分别用en_US/chs/cht输出今天是星期几*/
setlocale(LC_ALL, "en_US");
echo "美国格式：" . strftime("%A") . "<br>";
setlocale(LC_ALL, "chs");
echo "中文简体：" . strftime("%A") . "<br>";
setlocale(LC_ALL, "cht");
echo "中文繁体（gb2312下为乱码，big5下可见）：" . strftime("%A");
echo "<hr>";

/*将日期和时间解析为UNIX时间戳*/
/*实例：使用strtotime()函数获取英文格式日期时间字符串的UNIX时间戳戳*/
echo strtotime("now") . "&nbsp;&nbsp;";   //当前时间戳
echo "[输出当前时间]" . date("Y-m-d H:i:s", strtotime("now")) . "<br>"; //输出当前时间
echo strtotime("21 May 2009") . "&nbsp;&nbsp;"; //输出指定日期的时间戳
echo "[输出指定的日期]" . date("Y-m-d H:i:s", strtotime("21 May 2009")) . "<br>"; //输出指定的日期
echo strtotime("+3 day") . "&nbsp;&nbsp;";
echo "[当前时间加3天]" . date("Y-m-d H:i:s", strtotime("+3 day")) . "<br>";  //当前时间加三天
echo strtotime("+1 week") . "&nbsp;&nbsp;";
echo "[当前时间加1周]" . date("Y-m-d H:i:s", strtotime("+1 week")) . "<br>";  //当前时间加一周
echo strtotime("+1 week 2 day 3 hour 4 second") . "&nbsp;&nbsp;";
echo "[当前时间加1周2天3小时4秒钟]" . date("Y-m-d H:i:s", strtotime("+1 week 2 day 3 hours 4 seconds")) . "<br>";  //当前时间加一周两天三小时四秒钟
echo strtotime("next Thursday") . "&nbsp;&nbsp;";
echo "[下周四]" . date("Y-m-d H:i:s", strtotime("next thursday")) . "<br>";  //下周四
echo strtotime("last Monday") . "&nbsp;&nbsp;";
echo "[上周一]" . date("Y-m-d H:i:s", strtotime("last Monday")) . "<br>";  //上周一
echo "<hr>";

/*比较两个时间的大小*/
$time1 = date("Y-m-s H:i:s"); //当前时间
$time2 = date("2010-09-01 13:39:02"); //指定的时间
echo "变量\$time1的时间为：" . $time1 . "，对应的时间戳为：" . strtotime($time1) . "<br>";
echo "变量\$time2的时间为：" . $time2 . "，对应的时间戳为：" . strtotime($time2) . "<br>";
if (strtotime($time1) - strtotime($time2) < 0) {
    echo $time1 . " 早于 " . $time2;
} else if (strtotime($time1) - strtotime($time2) > 0) {
    echo $time2 . " 早于 " . $time1;
} else {
    echo $time1 . " 和 " . $time2 . " 相等";
}
echo "<hr>";

/*倒计时小程序*/
/*注意：float ceil(float value)，该函数为取整函数，
返回不小于value值的最小整数。如果有小数部分则进一位。
该函数返回float类型，而非整型*/
$t1 = strtotime(date("Y-m-d H:i:s")); //当前时间
$t2 = strtotime("2012-12-22 00:00:00"); //2012世界末日时间
$t3 = strtotime("2013-01-01"); //2013年元旦时间
$sub1 = ceil(($t2 - $t1) / (60 * 60)); //按小时计算，每小时=60分*60秒
$sub2 = ceil(($t3 - $t1) / (24 * 60 * 60)); //按天计算，每天=24小时*60分*60秒
echo "距离2012世界末日还有" . $sub1 . "小时<br>";
echo "距离2013年元旦还有" . $sub2 . "天";
echo "<hr>";

/*计算页面脚本的运行时间 microtime()函数 */
function run() //声明run_time()函数
{
    list($m, $n) = explode(" ", microtime()); //使用explode()函数返回两个变量
    $result = (float)$m + (float)$n;  //计算两个变量的和
    return $result; //返回变量之和
}

$start = run(); //第一次运行run_time()函数

//接下来运行上面例子中的代码段
$tr1 = strtotime(date("Y-m-d H:i:s"));
$tr2 = strtotime("2012-12-22 00:00:00");
$tr3 = strtotime("2013-01-01");
$sub1 = ceil(($tr2 - $tr1) / (60 * 60));
$sub2 = ceil(($tr3 - $tr1) / (24 * 60 * 60));
echo "距离2012世界末日还有" . $sub1 . "小时<br>";
echo "距离2013年元旦还有" . $sub2 . "天";
$end = run(); //再次运行run_time()函数
$ok = $end - $start;//计算运行的时间差
echo "<p> 【运行本程序共用时间为：" . $ok . " 秒】";