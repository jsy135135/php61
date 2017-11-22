<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 17:12:00
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 17:16:02
 */
$mem = new Memcache();
// $mem->addServer('192.168.110.131',11211);
$mem->addServer('192.168.110.131',11212);
// 存储数据
// var_dump($mem->set('number1',1,0,0));
// echo '<hr>';
// var_dump($mem->set('number2',2,0,0));
// 取数据
var_dump($mem->get('number1'));
echo '<hr>';
var_dump($mem->get('number2'));