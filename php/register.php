<?php


//
header('content-type:text/html;carset=utf-8');


//获取前端传递的数据

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


//然后连接后端数据库

//第二步：查询数据库，看是否是这个用户

//1.连接数据库

$conn=mysqli_connect('localhost','root','root','cures');

//2.执行sql语句
    
$sql="SELECT * FROM `miuse` WHERE `username`='$username' AND `password`='$password' ";

$res= mysqli_query($conn,$sql);

////解析数据,只要有一条就可以
$row=mysqli_fetch_assoc($res);

//第三步:把查询结果返回给前端

    if($row){
        $arr = array('code'=>1);
        echo json_encode($arr);
        // header('location:./index.html');
    }else{
        $arr = array('code'=>0);
        echo json_encode($arr);
    }




?>