<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-17 15:15:27
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-17 15:25:06
 */
$ip = '192.168.174.88';
echo $ipInt = ip2long($ip);
echo '<hr>';
echo $int = sprintf("%u",$ipInt);
echo '<hr>';
echo long2ip($ipInt);
echo '<hr>';
echo long2ip($int);
echo '<hr>';
#字符串拼接
echo 'this is'."$ip"."$ipInt"."$ip";
echo '<hr>';
echo sprintf("this is %s%s%s",$ip,$ipInt,$ip);
