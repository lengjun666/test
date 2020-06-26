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
	$sql = "select (username,password) from user where username='$username'";
//	发送sql
	$result=mysqli_select_db($conn, $sql);
	if($result == 0 || $result ==null){
		echo "<script type='text/javascript'>alert('用户名，或密码错误');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/login.html';</script>";
	}else{
		echo "<script type='text/javascript'>alert('登录成功');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/index.html';</script>";
	}
?>