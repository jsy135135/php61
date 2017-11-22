<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 15:06:02
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 20:03:28
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.111',11211);
// $mem->connect('127.0.0.1',11211);
// 添加数据
// $mem->set('name','itcastphp61',[是否压缩],过期时间);
$rs = $mem->set('name','itcastphp61',0,0);
var_dump($rs);
echo '<hr>';
$data = $mem->get('name');
var_dump($data);

