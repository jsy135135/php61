<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 16:08:39
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 16:13:02
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.131',11211);
//初始化值
$mem->set('num',0,0,0);
// 计数器操作
var_dump($mem->increment('num',5));
echo '<hr>';
var_dump($mem->decrement('num',7));
echo '<hr>';
// 删除key或者清空所有key
// $mem->delete('num');
$mem->flush();
var_dump($mem->get('num'));