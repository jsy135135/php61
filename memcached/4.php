<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-13 15:52:34
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-13 15:59:50
 */
// 实例化
$mem = new Memcache();
// 连接数据库
$mem->connect('192.168.110.131',11211);
// 标量类型
$rs1 = $mem->set('array',array('name'=> 'php61','job'=>'php'),0,0);
var_dump($rs1);
echo '<hr>';
// 创建类
class Person{
  // 构造方法  实列化自动触发
  public function __construct($name,$job)
  {
    $this->name = $name;
    $this->job = $job;
  }
  // 普通方法
  public function say()
  {
    echo $this->name.'say,my job is '.$this->job;
  }
}
$obj = new Person('php61','php');
// var_dump($obj);
$rs2 = $mem->set('obj',$obj,0,0);
var_dump($rs2);
echo '<hr>';
var_dump($mem->get('array'));
echo '<hr>';
var_dump($mem->get('obj'));