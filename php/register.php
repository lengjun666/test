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
	$sql = "insert into user (username,password) values ('$username','$password')";
//	发送sql
	$result = mysqli_query($conn, $sql);
//	判断结果
	if($result){
		echo "<script type='text/javascript'>alert('恭喜您,注册成功');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/login.html';</script>";
	}else{
		echo "<script type='text/javascript'>alert('很抱歉,注册失败');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/register.html';</script>";
	}
//	关闭连接
	mysqli_close($conn);
?>