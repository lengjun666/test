<?php
	echo "<meta charset='utf-8'>";
//	trim()清除前后空格
	$goodsname = trim($_POST["goodsname"]);
	$goodstext = trim($_POST["goodstext"]);
	$goodsrmb = trim($_POST["goodsrmb"]);
	$filename = $_FILES['filename'];
	
//	将图片保存到本地项目文件夹
	move_uploaded_file($filename["tmp_name"],"../img/".$filename['name'] );
	print_r($filename);
//	将图片的路径存到数据库的表中
	$filesrc = "img/".$filename["name"];
	// 连接数据库
	$conn = mysqli_connect("127.0.0.1", "midemo", "midemo", "midemo");
	// 设置字符集
	mysqli_set_charset($conn,"utf8");
	// SQL语句
	$sql = "insert into goods (goodsname,goodstext,goodsrmb,imgsrc) values ('$goodsname','$goodstext','$goodsrmb','$filesrc')";
	// 发送sql
	$result = mysqli_query($conn, $sql);
	// 判断结果
	if($result){
		echo "<script type='text/javascript'>alert('上传成功');</script>";
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/login.html';</script>";
	}else{
		echo "<script type='text/javascript'>location.href='http://www.midemo.com/register.html';</script>";
		echo "<script type='text/javascript'>alert('上传失败');</script>";
	}
	// 关闭连接
	mysqli_close($conn);
?>