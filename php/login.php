<?php
	echo "<meta charset='utf-8'>";
	
//	trim()清除前后空格
	$username = trim($_POST["username"]);
	$password = md5(trim($_POST["password"]));
	
//	连接数据库
	$conn = mysqli_connect("127.0.0.1", "midemo", "midemo", "midemo");
	
//	设置字符集
	mysqli_set_charset($conn,"utf8");
	
//	SQL语句
	$sql = "select username,password from user where username='$username' and password = '$password'";

//	发送sql
	$result=mysqli_query($conn, $sql);

//	查看一下结果有多少条数据
	$num = mysqli_num_rows($result);
	if($num > 0){
//		有数据，登录成功
		echo "<script type='text/javascript'>alert('登录成功');</script>";
//		echo "<script type='text/javascript'>location.href='http://www.midemo.com/index.html';</script>";
		echo "<script type='text/javascript'>location.href='../index.html';</script>";
		
	}else{
//		没有数据，登录失败
		echo "<script type='text/javascript'>alert('用户名，或密码错误');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/login.html';</script>";
	}
//	关闭连接
	mysqli_close($conn);
?>