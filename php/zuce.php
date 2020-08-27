<?php

header('content-type:text/html;carset=utf-8');

//获取前端传递的数据

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


//然后连接后端数据
//第二步：查询数据库，看是否有这个用户

//1 连接数据库

$conn=mysqli_connect('localhost','root','root','cures');

//2执行sql语句
//插入sql的方法

$sql="INSERT INTO `miuse`(`username`,`password`) VALUES('$username','$password') ";

$res=mysqli_query($conn,$sql);

//解析结果  

    var_dump($res);

//4. 关闭数据库
        // $arr = array('code'=>0);
        // echo json_encode($arr);

    mysqli_close($conn);




?>
