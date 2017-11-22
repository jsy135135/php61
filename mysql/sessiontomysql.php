<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-17 09:49:43
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-17 10:07:15
 */
class MySessionHandler implements SessionHandlerInterface
{
  // 实现接口的多个方法
  // 打开
  public function open($save_path, $session_name)
  {
    // 连接数据库
    mysql_connect('127.0.0.1','root','root');
    mysql_query('use php61');
    mysql_query('set names utf8');
  }
  // 写
  public function write($session_id,$session_data)
  {
    // session_id，session_data
    $sql = "insert into session values ('$session_id','$session_data','".time()."')";
    // echo $sql;die();
    $rs = mysql_query($sql);
    return $rs;
  }
  // 读
  public function read($session_id)
  {
    $sql = "select * from session where session_id = '$session_id'";
    $resource = mysql_query($sql);
    // 取出数据
    $row = mysql_fetch_assoc($resource);
    return $row['session_data'];
  }
  // 删除
  public function destroy($session_id)
  {
    $sql = "delete from session where session_id = '$session_id'";
    $rs = mysql_query($sql);
    return $rs;
  }
  // 关闭
  public function close()
  {
      mysql_close();
  }
  // gc
  public function gc($maxlifetime)
  {

  }
}
// 设置session重写
$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();
// $_SESSION['name'] = 'php61';
// echo session_id();
session_destroy();
