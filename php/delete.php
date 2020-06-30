<?php
	
	echo "<meta charset='utf-8'>";
	
//	$id = $_GET['id'];
	//	连接数据库
	$conn = mysqli_connect("127.0.0.1", "midemo", "midemo", "midemo");
	
	//	设置字符集
	mysqli_set_charset($conn,"utf8");

//	通过地址栏取id
	$id = (int)$_REQUEST["id"];
	
	// sql语句	
	$sql = "delete from goods where id =".$id;
	
	// 提交查询
	$result = mysqli_query($conn, $sql);
	echo $result;

	if($result){
		echo "<script type='text/javascript'>alert('删除成功');</script>";
		echo "<script type='text/javascript'>location.replace(document.referrer);</script>";
//		echo "<script type='text/javascript'>location.href='www.midemo.com/list.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('删除失败');</script>";
		echo "<script type='text/javascript'>window.history.back();</script>";
	}
	
	//	关闭连接
	mysqli_close($conn);
?>