<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 16:01:06
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 16:03:22
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.131',11211);
// 特殊类型
$rs1 = $mem->set('null',null,0,0);
var_dump($rs1);
echo '<hr>';
$rs2 = $mem->set('resource',curl_init(),0,0);
var_dump($rs2);
echo '<hr>';
var_dump($mem->get('null'));
echo '<hr>';
var_dump($mem->get('resource'));