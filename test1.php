<?php
//1.实例化redis
$redis=new Redis();
//定义主机和端口
$host="192.168.8.2";
$port=6379;
//3.连接redis服务器
$redis->connect($host,$port);
//4.设置值
$redis->set("windows","windows testing");
//5.获取值
$data=$redis->get("windows");
echo $data;








