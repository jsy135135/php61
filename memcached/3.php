<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 15:25:15
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 15:28:07
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.131',11211);
// 标量类型
$rs1 = $mem->set('string','string',0,0);
var_dump($rs1);
echo '<hr>';
$rs2 = $mem->set('int',10,0,0);
var_dump($rs2);
echo '<hr>';
$rs3 = $mem->set('float',183.23,0,0);
var_dump($rs3);
echo '<hr>';
$rs4 = $mem->set('bool',true,0,0);
var_dump($rs4);
echo '<hr>';
var_dump($mem->get('string'));
echo '<hr>';
var_dump($mem->get('int'));
echo '<hr>';
var_dump($mem->get('float'));
echo '<hr>';
var_dump($mem->get('bool'));
echo '<hr>';