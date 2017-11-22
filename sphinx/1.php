<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-11-20 16:30:07
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-11-20 17:30:04
 */
// 引入操作类
require './sphinxapi.php';
// 实列化
$sphinx = new SphinxClient();
// 连接服务
$sphinx->setServer('127.0.0.1',9312);
// 设置匹配模式
// 任意匹配满足分词之一即可显示
// $sphinx->setMatchMode(SPH_MATCH_ANY);
// 完整匹配，需要词汇全部匹配才会显示
// $sphinx->setMatchMode(SPH_MATCH_ALL);
// bool表达式
$sphinx->setMatchMode(SPH_MATCH_BOOLEAN);
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>搜索</title>
</head>
<body>
  <form action="" method="get">
    <input type="text" name="keywords" value="<?php echo $_GET['keywords']?>"><br />
    <input type="submit" name="" value="查询">
  </form>
</body>
</html>
<?php
// 接收关键词
$keywords = !empty($_GET['keywords']) ? $_GET['keywords']:'memcache';
// $rs = $sphinx->query($keywords);
//bool写法
$rs = $sphinx->query("$keywords !memcached & !memcache");
// var_dump($rs);die();
if(empty($rs["matches"])){
  echo '没有查询到对应数据!';
}else{
  // var_dump($rs["matches"]);
  $ids = '';
  foreach ($rs["matches"] as $key => $value) {
    $ids .= ','.$key;
  }
  $ids = ltrim($ids,',');
  // echo $ids;
  // 查询数据库取出信息
  $mysqli = new mysqli('127.0.0.1','root','root','php61');
  $sql = "select * from zhilian where id in ($ids)";
  $obj = $mysqli->query($sql);
  // var_dump($obj);
  // 建立空数组存储
  $data = array();
  while ($row = $obj->fetch_row())
    {
      $row = $sphinx->buildExcerpts($row,'zhilian',$keywords,array(
        'before_match' => '<strong><font color="red">',
        'after_match' => '</font></strong>'
      ));
      $data[] = $row;
    };
  // var_dump($data);die();
  //遍历显示数据
  foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
      echo '<p>'.$v.'</p>';
    }
  }
}
