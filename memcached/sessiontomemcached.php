<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 16:33:21
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 16:38:53
 */
// 设置存储方式
ini_set('session.save_handler', 'memcache');
// 设置存储路径
ini_set('session.save_path', 'tcp://192.168.110.131:11211');
// 开启session
session_start();
// 存储session
$_SESSION['name'] = 'itcastphp61';
echo session_id();
echo '<hr>';
// 读取session
echo $_SESSION['name'];