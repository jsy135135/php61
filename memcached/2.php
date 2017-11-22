<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 15:06:02
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 15:21:01
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.131',11211);
// 添加数据
// $mem->set('name','itcastphp61',[是否压缩],过期时间);
// 时间差
$rs = $mem->set('age',18,0,10);
// 时间戳
$rs = $mem->set('age',18,0,time()+10);
// var_dump($rs);
// echo '<hr>';
$data = $mem->get('age');
var_dump($data);

