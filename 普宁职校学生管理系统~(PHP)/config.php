<?php
   $user="sql_wedo";//数据库用户名
   $pass="12345678";//数据库密码
   $datebase="sql_wedo";//数据库名
   $sqlhost="localhost";//数据库服务器
   @$con = mysqli_connect($sqlhost,$user,$pass,$datebase);
   if(!$con){
     exit("数据库连接错误");
   }
?>