<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-17 15:00:57
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-17 15:08:55
 */
echo $time = time();
echo '<hr>';
echo $dateTime = date("Y-m-d H:i:s",$time);
echo '<hr>';
echo strtotime($dateTime);
echo '<hr>';
// 计算出昨天这个时候的时间戳
echo $yesterday = $time-60*60*24;
echo '<hr>';
echo date("Y-m-d H:i:s",$yesterday);
// 计算上一个星期日
echo '<hr>';
echo date("Y-m-d",strtotime('last Sunday'));